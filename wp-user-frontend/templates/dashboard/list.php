<div class="items-table-container">
    <table class="items-table <?php echo implode( ' ', array_map('esc_attr', $post_type ) ); ?>">
        <thead>
            <tr class="items-list-header">
                <?php
                if ( 'on' === $featured_img ) {
                    echo wp_kses_post( '<th>' . __( 'Featured Image', 'wp-user-frontend' ) . '</th>' );
                }
                ?>
                <th><?php esc_html_e( 'Title', 'wp-user-frontend' ); ?></th>
                <th><?php esc_html_e( 'Status', 'wp-user-frontend' ); ?></th>

                <?php do_action( 'wpuf_account_posts_head_col', $args ); ?>

                <?php if ( 'on' === $enable_payment && 'off' !== $payment_column ) { ?>
                    <th><?php esc_html_e( 'Payment', 'wp-user-frontend' ); ?></th>
                <?php } ?>

                <th><?php esc_html_e( 'Options', 'wp-user-frontend' ); ?></th>
            </tr>
        </thead>
        <tbody>
            <?php
                global $post;

                while ( $dashboard_query->have_posts() ) {
                    $dashboard_query->the_post();
                    $show_link        = ! in_array( $post->post_status, ['draft', 'future', 'pending'] );
                    $payment_status   = get_post_meta( $post->ID, '_wpuf_payment_status', true );
            ?>
            <tr>
                <?php if ( 'on' === $featured_img ) { ?>
                    <td data-label="<?php esc_attr_e( 'Featured Image: ', 'wp-user-frontend' ); ?>">
                    <?php
                        echo $show_link ? wp_kses_post( '<a href="' . get_permalink( $post->ID ) . '">' ) : '';

                        if ( has_post_thumbnail() ) {
                            the_post_thumbnail( $featured_img_size );
                        } else {
                            printf( '<img src="%1$s" class="attachment-thumbnail wp-post-image" alt="%2$s" title="%2$s" />', esc_attr( apply_filters( 'wpuf_no_image', plugins_url( '../assets/images/no-image.png', __DIR__ ) ) ), esc_html( __( 'No Image', 'wp-user-frontend' ) ) );
                        }

                        echo $show_link ? '</a>' : '';
                    ?>
                        <span class="post-edit-icon">
                            &#x25BE;
                        </span>
                    </td>
                <?php } ?>
                <td data-label="<?php esc_attr_e( 'Title: ', 'wp-user-frontend' ); ?>" class="<?php echo 'on' === $featured_img ? 'data-column' : '' ; ?>">
                    <?php if ( ! $show_link ) { ?>

                        <?php echo esc_html( wp_trim_words( get_the_title(), 5 ) ); ?>

                    <?php } else { ?>

                        <a href="<?php the_permalink(); ?>" title="<?php printf( 
                            // translators: %s: is permalink
                            esc_attr__( 'Permalink to %s', 'wp-user-frontend' ), the_title_attribute( 'echo=0' ) ); ?>" rel="bookmark"><?php echo esc_html( wp_trim_words( get_the_title(), 5 ) ); ?></a>

                    <?php } ?>
                    <?php if ( 'on' !== $featured_img ) { ?>
                        <span class="post-edit-icon">
                            &#x25BE;
                        </span>
                    <?php } ?>
                </td>
                <td data-label="<?php esc_attr_e( 'Status: ', 'wp-user-frontend' ); ?>" class="data-column">
                    <?php wpuf_show_post_status( $post->post_status ); ?>
                </td>

                <?php
                do_action( 'wpuf_account_posts_row_col', $args, $post );

                if ( 'on' === $enable_payment && 'off' != $payment_column ) {
                    echo '<td data-label="' . esc_attr( 'Payment: ' ) . '" class="data-column">';

                    if ( empty( $payment_status ) ) {
                        esc_html_e( 'Not Applicable', 'wp-user-frontend' );
                    } elseif ( $payment_status !== 'completed' ) {
                        echo '<a href="' . esc_attr( trailingslashit( get_permalink( wpuf_get_option( 'payment_page',
                                                                                                      'wpuf_payment' ) ) ) ) . '?action=wpuf_pay&type=post&post_id=' . esc_attr( $post->ID ) . '">' . esc_html__( 'Pay Now', 'wp-user-frontend' ) . '</a>';
                    } elseif ( 'completed' === $payment_status ) {
                        esc_html_e( 'Completed', 'wp-user-frontend' );
                    }

                    echo '</td>';
                }
                ?>

                        <td data-label="<?php esc_attr_e( 'Options: ', 'wp-user-frontend' ); ?>" class="data-column">
                            <?php
                            if ( wpuf_is_post_editable( $post ) ) {
                                $edit_page = (int) wpuf_get_option( 'edit_page_id', 'wpuf_frontend_posting' );
                                $url = add_query_arg( [ 'pid' => $post->ID ], get_permalink( $edit_page ) );
                                ?>
                                <a class="wpuf-posts-options wpuf-posts-edit" href="<?php echo esc_url( wp_nonce_url( $url, 'wpuf_edit' ) ); ?>">
                                    <img src="<?php echo wp_kses( WPUF_ASSET_URI . '/images/edit.svg', array('svg' => ['xmlns' => true, 'width' => true, 'height' => true, 'viewBox' => true, 'fill' => true,], 'path' => ['d' => true, 'fill' => true, 'fill-rule' => true, 'clip-rule' => true ] ) ); ?>" alt="Edit">
                                </a>
                                <?php
                                }
                             ?>

                            <?php
                            if ( 'yes' === wpuf_get_option( 'enable_post_del', 'wpuf_dashboard', 'yes' ) ) {
                                $del_url = add_query_arg( ['action' => 'del', 'pid' => $post->ID] );
                                $message = __( 'Are you sure to delete?', 'wp-user-frontend' ); ?>
                                <a class="wpuf-posts-options wpuf-posts-delete" style="color: red;" href="<?php echo esc_url_raw( wp_nonce_url( $del_url, 'wpuf_del' ) ); ?>" onclick="return confirm('<?php echo esc_attr( $message ); ?>');">
                                    <img src="<?php echo wp_kses( WPUF_ASSET_URI . '/images/trash.svg', array('svg' => ['xmlns' => true, 'width' => true, 'height' => true, 'viewBox' => true, 'fill' => true,], 'path' => ['d' => true, 'fill' => true, 'fill-rule' => true, 'clip-rule' => true ] ) ); ?>" alt="Delete">
                                </a>
                            <?php
                            } ?>
                        </td>
                    </tr>
                <?php
                }

            wp_reset_postdata();
        ?>
        </tbody>
    </table>
</div>
