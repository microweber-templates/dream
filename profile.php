<?php include template_dir() . "header.php"; ?>


<?php
if (is_logged() == false) {
    return mw()->url_manager->redirect(login_url());
}




$orders_params = array('created_by' => user_id(), 'order_by' => 'updated_at desc');
$orders = get_orders($orders_params);
?>


    <script>
        $(document).ready(function () {
            mw.tabs({
                nav: '#tabsnav  .tabnav',
                tabs: '#tabsnav .tabitem'
            });
        });
    </script>


    <style>
        .tabs-container .elements-forms {
            background: #f8f8f8;
            padding: 25px;
        }

        .tabs-container label {
            font-weight: 600;
            font-variant-ligatures: common-ligatures;
            margin-bottom: 0;
            font-size: 0.625em;
            line-height: 2.6em;
            margin-top: 0;
            text-transform: uppercase;
            letter-spacing: 1px;
            font-weight: 400;
            margin-bottom: 2.36363636363636em;
            display: block;
            margin: 0;
            margin-left: 2.6em;
        }
    </style>

    <div>
        <module type="layouts" template="skin-42"/>

        <section class="">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="tabs-container tabs-4">
                            <div class="text-center">
                                <ul class="tabs">
                                    <li class="active">
                                        <div class="tab__title btn">
                                            <span class="btn__text">Account Information</span>
                                        </div>
                                    </li>

                                    <li class="">
                                        <div class="tab__title btn">
                                            <span class="btn__text">My Orders</span>
                                        </div>
                                    </li>
                                </ul>
                            </div>

                            <ul class="tabs-content">
                                <li class="active">
                                    <div class="tab__content">
                                        <script>
                                            saveuserdata = function () {

                                                var data = mw.serializeFields('#user-data');
                                                if (data.password != data.password2) {
                                                    mw.$('#errnotification').html('Passwords do not match').show();
                                                    return false;
                                                } else {
                                                    mw.$('#errnotification').hide();

                                                    if (data.password == '') {
                                                        delete data.password;
                                                        delete data.password2;
                                                    }
                                                }
                                                mw.tools.loading('#user-data')
                                                mw.xhrPost("<?php print api_url(); ?>save_user", data, function () {
                                                    mw.tools.loading('#user-data', false);
                                                });
                                                return false;
                                            }
                                        </script>


                                        <?php $user = get_user_by_id(user_id()); ?>


                                        <div class="elements-forms">
                                            <form id="user-data" onsubmit="return saveuserdata()">
                                                <div class="row">
                                                    <div class="col-sm-6">
                                                        <label><?php _lang('Username', 'templates/dream'); ?>:</label>
                                                        <input type="text" name="username"
                                                               value="<?php print $user['username']; ?>"
                                                               placeholder="<?php _lang('Your Username', 'templates/dream'); ?>"/>
                                                    </div>

                                                    <div class="col-sm-6">
                                                        <label><?php _lang('Email Address', 'templates/dream'); ?>:</label>
                                                        <input type="text" name="email"
                                                               value="<?php print $user['email']; ?>"
                                                               placeholder="<?php _lang('Your Email', 'templates/dream'); ?>"/>
                                                    </div>

                                                    <div class="col-sm-6">
                                                        <label><?php _lang('First Name', 'templates/dream'); ?>:</label>
                                                        <input type="text" name="first_name"
                                                               value="<?php print $user['first_name']; ?>"
                                                               placeholder="<?php _lang('Your First name', 'templates/dream'); ?>"/>
                                                    </div>

                                                    <div class="col-sm-6">
                                                        <label><?php _lang('Last Name', 'templates/dream'); ?>:</label>
                                                        <input type="text" name="last_name"
                                                               value="<?php print $user['last_name']; ?>"
                                                               placeholder="<?php _lang('Your Last name', 'templates/dream'); ?>"/>
                                                    </div>

                                                    <div class="col-sm-6">
                                                        <label><?php _lang('New Password', 'templates/dream'); ?>:</label>
                                                        <input type="password" name="password"/>
                                                    </div>

                                                    <div class="col-sm-6">
                                                        <label><?php _lang('Confirm Password', 'templates/dream'); ?>:</label>
                                                        <input type="password" name="password2"/>
                                                    </div>

                                                    <div class="mw-ui-box mw-ui-box-important mw-ui-box-content"
                                                         id="errnotification"
                                                         style="display: none;margin-bottom: 12px;"></div>


                                                    <div class="col-sm-4 col-sm-offset-4 text-center">
                                                        <button class="btn btn--primary"
                                                                onclick="saveuserdata()"><?php _lang('Save', 'templates/dream'); ?></button>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>

                                    </div>
                                </li>

                                <li>
                                    <div class="tab__content">
                                        <?php if (isset($orders) and is_array($orders)): ?>
                                            <h3 class="icon-section-title"><span class="sm-icon-bag2"></span><?php _lang('Orders', 'templates/dream'); ?></h3>
                                            <?php foreach ($orders as $order) { ?>
                                                <?php $cart = get_cart('order_id=' . $order['id']); ?>
                                                <?php if (is_array($cart) and !empty($cart)): ?>
                                                    <div class="mw-ui-box mw-ui-box-content my-order">
                                                        <div class="my-order-status"><?php _lang('Status:', 'templates/dream'); ?>
                                                            <?php if ($order['order_status'] == 'completed') { ?>
                                                                <span class="my-order-status-completed"><?php _lang('Completed', 'templates/dream'); ?></span>
                                                            <?php } else { ?>
                                                                <span class="my-order-status-pending"><?php _lang('Pending', 'templates/dream'); ?></span>
                                                            <?php } ?>
                                                        </div>

                                                        <h4><?php _lang('Order #', 'templates/dream'); ?><?php print $order['id']; ?> -
                                                            <small><?php _lang('created on', 'templates/dream'); ?> <?php print $order['created_at']; ?></small>
                                                        </h4>

                                                        <table width="100%" cellspacing="0" cellpadding="0"
                                                               class="mw-ui-table mw-ui-table-basic">
                                                            <thead>
                                                            <tr>
                                                                <th><?php _lang('Image', 'templates/dream'); ?></th>
                                                                <th><?php _lang('Title', 'templates/dream'); ?></th>
                                                                <th><?php _lang('Quantity', 'templates/dream'); ?></th>
                                                                <th><?php _lang('Price', 'templates/dream'); ?></th>
                                                                <th><?php _lang('Total', 'templates/dream'); ?></th>
                                                            </tr>
                                                            </thead>
                                                            <tbody>
                                                            <?php foreach ($cart as $product) { ?>
                                                                <?php $theproduct = get_content_by_id($product['rel_id']); ?>
                                                                <tr>
                                                                    <td>
                                                                        <img src="<?php print get_picture($theproduct['id']); ?>"
                                                                             width="70" alt=""/></td>
                                                                    <td><?php print $theproduct['title']; ?></td>
                                                                    <td><?php print $product['qty']; ?></td>
                                                                    <td><?php print currency_format($product['price']); ?></td>
                                                                    <td><?php print currency_format(intval($product['qty']) * intval($product['price'])); ?></td>
                                                                </tr>
                                                            <?php } ?>
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                <?php endif; ?>
                                                <br/>
                                            <?php } ?>
                                        <?php else: ?>
                                            <div class="mw-ui-box mw-ui-box-content my-order">
                                                <h3 class="icon-section-title text-center"><span
                                                            class="sm-icon-bag2"></span><?php _lang('You have no orders', 'templates/dream'); ?></h3>
                                            </div>
                                        <?php endif; ?>
                                    </div>
                                </li>

                            </ul>

                        </div>
                    </div>
                </div>
            </div>
        </section>
        <div class="clearfix"></div>

    </div>

<?php include template_dir() . "footer.php"; ?>