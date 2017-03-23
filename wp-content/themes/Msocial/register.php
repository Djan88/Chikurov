<?php

/* переопределение шаблона /wp-content/plugins/buddypress/bp-templates/bp-legacy/buddypress/members/register.php */

global $tpl;
gk_load('header');
gk_load('before');

?>

<div id="buddypress">

	<?php do_action( 'bp_before_register_page' ); ?>

	<div class="page" id="register-page">

        <form action="" name="signup_form" id="signup_form" class="standard-form custom-reg-form" method="post" enctype="multipart/form-data"><div>

		<?php if ( 'registration-disabled' == bp_get_current_signup_step() ) : ?>
			<?php do_action( 'template_notices' ); ?>
			<?php do_action( 'bp_before_registration_disabled' ); ?>

				<p><?php _e( 'Регистрация пользователей будет доступна в ближайщее время.', 'buddypress' ); ?></p>

			<?php do_action( 'bp_after_registration_disabled' ); ?>
		<?php endif; // registration-disabled signup setp ?>

		<?php if ( 'request-details' == bp_get_current_signup_step() ) : ?>

			<?php do_action( 'template_notices' ); ?>

			<?php do_action( 'bp_before_account_details_fields' ); ?>

			<!--<div class="register-section" id="basic-details-section">-->

				<?php /***** Basic Account Details ******/ ?>

				<h4>Регистрация</h4>

				<label for="signup_username"><?php _e( 'Username', 'buddypress' ); ?> <?php _e( '(required)', 'buddypress' ); ?></label>
				<?php do_action( 'bp_signup_username_errors' ); ?>
				<input type="text" name="signup_username" id="signup_username" value="<?php bp_signup_username_value(); ?>" />

				<label for="signup_email"><?php _e( 'Email Address', 'buddypress' ); ?> <?php _e( '(required)', 'buddypress' ); ?></label>
				<?php do_action( 'bp_signup_email_errors' ); ?>
				<input type="text" name="signup_email" id="signup_email" value="<?php bp_signup_email_value(); ?>" />

				<label for="signup_password"><?php _e( 'Choose a Password', 'buddypress' ); ?> <?php _e( '(required)', 'buddypress' ); ?></label>
				<?php do_action( 'bp_signup_password_errors' ); ?>
				<input type="password" name="signup_password" id="signup_password" value="" />

				<label for="signup_password_confirm"><?php _e( 'Confirm Password', 'buddypress' ); ?> <?php _e( '(required)', 'buddypress' ); ?></label>
				<?php do_action( 'bp_signup_password_confirm_errors' ); ?>
				<input type="password" name="signup_password_confirm" id="signup_password_confirm" value="" />

				<?php do_action( 'bp_account_details_fields' ); ?>

			<!--</div> #basic-details-section -->

			<?php do_action( 'bp_after_account_details_fields' ); ?>

			<?php /***** Extra Profile Details ******/ ?>

			<?php if ( bp_is_active( 'xprofile' ) ) : ?>

				<?php do_action( 'bp_before_signup_profile_fields' ); ?>

                <?php /* Use the profile field loop to render input fields for the 'base' profile field group */ ?>
                <?php if ( bp_is_active( 'xprofile' ) ) : if ( bp_has_profile( array( 'profile_group_id' => 1, 'fetch_field_data' => false ) ) ) : while ( bp_profile_groups() ) : bp_the_profile_group(); ?>

                <?php while ( bp_profile_fields() ) : bp_the_profile_field(); if(bp_get_the_profile_field_input_name() === 'field_9' || bp_get_the_profile_field_input_name() === 'field_1'): ?>

                    <div class="editfield">

                        <?php if ( 'textbox' == bp_get_the_profile_field_type() && bp_get_the_profile_field_input_name() !== 'field_16' && bp_get_the_profile_field_input_name() !== 'field_17') :  ?>

                            <label for="<?php bp_the_profile_field_input_name(); ?>"><?php bp_the_profile_field_name(); ?> <?php if ( bp_get_the_profile_field_is_required() ) : ?><?php _e( '(required)', 'buddypress' ); ?><?php endif; ?></label>
                            <?php do_action( bp_get_the_profile_field_errors_action() ); ?>
                            <input type="text" name="<?php bp_the_profile_field_input_name(); ?>" id="<?php bp_the_profile_field_input_name(); ?>" value="<?php bp_the_profile_field_edit_value(); ?>" />

                        <?php  endif; ?>

                        <?php if ( 'textarea' == bp_get_the_profile_field_type() ) :  ?>

                            <label for="<?php bp_the_profile_field_input_name(); ?>"><?php bp_the_profile_field_name(); ?> <?php if ( bp_get_the_profile_field_is_required() ) : ?><?php _e( '(required)', 'buddypress' ); ?><?php endif; ?></label>
                            <?php do_action( bp_get_the_profile_field_errors_action() ); ?>
                            <textarea rows="5" cols="40" name="<?php bp_the_profile_field_input_name(); ?>" id="<?php bp_the_profile_field_input_name(); ?>"><?php bp_the_profile_field_edit_value(); ?></textarea>

                        <?php  endif; ?>

                        <?php do_action( 'bp_custom_profile_edit_fields_pre_visibility' ); ?>

                        <?php if ( bp_current_user_can( 'bp_xprofile_change_field_visibility' ) ) : ?>


                            <div class="field-visibility-settings" id="field-visibility-settings-<?php bp_the_profile_field_id() ?>">
                                <fieldset>
                                    <legend><?php _e( 'Who can see this field?', 'buddypress' ) ?></legend>

                                    <?php bp_profile_visibility_radio_buttons() ?>

                                </fieldset>
                                <a class="field-visibility-settings-close" href="#"><?php _e( 'Close', 'buddypress' ) ?></a>

                            </div>
                        <?php endif ?>

                        <?php do_action( 'bp_custom_profile_edit_fields' ); ?>

                        <p class="description"><?php bp_the_profile_field_description(); ?></p>

                    </div>

                <?php endif; endwhile; ?>

                <input type="hidden" name="signup_profile_field_ids" id="signup_profile_field_ids" value="<?php bp_the_profile_group_field_ids(); ?>" />

                <?php endwhile; endif; endif; ?>

                <?php do_action( 'bp_signup_profile_fields' ); ?>



				<?php do_action( 'bp_after_signup_profile_fields' ); ?>

			<?php endif; ?>

			<?php if ( bp_get_blog_signup_allowed() ) : ?>

				<?php do_action( 'bp_before_blog_details_fields' ); ?>

				<?php /***** Blog Creation Details ******/ ?>

				<div class="register-section" id="blog-details-section">

					<h4><?php _e( 'Blog Details', 'buddypress' ); ?></h4>

					<p><input type="checkbox" name="signup_with_blog" id="signup_with_blog" value="1"<?php if ( (int) bp_get_signup_with_blog_value() ) : ?> checked="checked"<?php endif; ?> /> <?php _e( 'Yes, I\'d like to create a new site', 'buddypress' ); ?></p>

					<div id="blog-details"<?php if ( (int) bp_get_signup_with_blog_value() ) : ?>class="show"<?php endif; ?>>

						<label for="signup_blog_url"><?php _e( 'Blog URL', 'buddypress' ); ?> <?php _e( '(required)', 'buddypress' ); ?></label>
						<?php do_action( 'bp_signup_blog_url_errors' ); ?>

						<?php if ( is_subdomain_install() ) : ?>
							http:// <input type="text" name="signup_blog_url" id="signup_blog_url" value="<?php bp_signup_blog_url_value(); ?>" /> .<?php bp_blogs_subdomain_base(); ?>
						<?php else : ?>
							<?php echo home_url( '/' ); ?> <input type="text" name="signup_blog_url" id="signup_blog_url" value="<?php bp_signup_blog_url_value(); ?>" />
						<?php endif; ?>

						<label for="signup_blog_title"><?php _e( 'Site Title', 'buddypress' ); ?> <?php _e( '(required)', 'buddypress' ); ?></label>
						<?php do_action( 'bp_signup_blog_title_errors' ); ?>
						<input type="text" name="signup_blog_title" id="signup_blog_title" value="<?php bp_signup_blog_title_value(); ?>" />

						<span class="label"><?php _e( 'I would like my site to appear in search engines, and in public listings around this network.', 'buddypress' ); ?>:</span>
						<?php do_action( 'bp_signup_blog_privacy_errors' ); ?>

						<label><input type="radio" name="signup_blog_privacy" id="signup_blog_privacy_public" value="public"<?php if ( 'public' == bp_get_signup_blog_privacy_value() || !bp_get_signup_blog_privacy_value() ) : ?> checked="checked"<?php endif; ?> /> <?php _e( 'Yes', 'buddypress' ); ?></label>
						<label><input type="radio" name="signup_blog_privacy" id="signup_blog_privacy_private" value="private"<?php if ( 'private' == bp_get_signup_blog_privacy_value() ) : ?> checked="checked"<?php endif; ?> /> <?php _e( 'No', 'buddypress' ); ?></label>

						<?php do_action( 'bp_blog_details_fields' ); ?>

					</div>

				</div><!-- #blog-details-section -->

				<?php do_action( 'bp_after_blog_details_fields' ); ?>

			<?php endif; ?>

			<?php do_action( 'bp_before_registration_submit_buttons' ); ?>

			<div class="submit">
				<input type="submit" name="signup_submit" id="signup_submit" value="<?php _e( 'Complete Sign Up', 'buddypress' ); ?>" />
			</div>

			<?php do_action( 'bp_after_registration_submit_buttons' ); ?>

			<?php wp_nonce_field( 'bp_new_signup' ); ?>

		<?php endif; // request-details signup step ?>

		<?php if ( 'completed-confirmation' == bp_get_current_signup_step() ) : ?>

			<?php do_action( 'template_notices' ); ?>
			<?php do_action( 'bp_before_registration_confirmed' ); ?>

			<?php if ( bp_registration_needs_activation() ) : ?>
				<p><?php _e( 'You have successfully created your account! To begin using this site you will need to activate your account via the email we have just sent to your address.', 'buddypress' ); ?></p>
			<?php else : ?>
				<p><?php _e( 'You have successfully created your account! Please log in using the username and password you have just created.', 'buddypress' ); ?></p>
			<?php endif; ?>

			<?php do_action( 'bp_after_registration_confirmed' ); ?>

		<?php endif; // completed-confirmation signup step ?>

		<?php do_action( 'bp_custom_signup_steps' ); ?>

		</div></form>

	</div>

	<?php do_action( 'bp_after_register_page' ); ?>

</div><!-- #buddypress -->

<?php

gk_load('after');
gk_load('footer');

// EOF