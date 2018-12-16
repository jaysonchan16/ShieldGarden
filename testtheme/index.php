<?php 
if(is_page('admin-enter-result'))
	{
		get_header('adminmainmenu');
      }
      else if(is_page('dealer-percentage'))
      {
      get_header('dealerpercentage');
      }
      else if(is_page('admin-login'))
      {
      get_header('login');
      }
      else if(is_page('second-sub-dealer-profile'))
      {
      get_header('secondsubdealerprofile');
      }
      else if(is_page('sub-dealer-profile'))
      {
      get_header('subdealerprofile');
      }
      else if(is_page('sub-dealer-registration'))
      {
      get_header('subdealerregistration');
      }
      else if(is_page('user-bet'))
      {
      get_header('userbet');
      }
      else if(is_page('user-guide-page'))
      {
      get_header('userguidepage');
      }
      else if(is_page('user-4d-result'))
      {
      get_header('usermainmenu');
      }
      else if(is_page('admin-login'))
      {
      get_header('login');
      }
      else if(is_page('user-login'))
      {
      get_header('login');
      }
      else if(is_page('insert-bet-calculation'))
      {
        get_header('insertbetcalculation');
      }
      else if(is_page('dealer-store-dealer-registration'))
      {
        get_header('storedealerregistration');
      }
      else if(is_page('admin-4d-results')) 
      {
      get_header('adminresults');
      }  
			else if(is_page('admin-user-profile'))
			{
				get_header('adminuserprofile');
			}
      else if(is_page('admin-dealer-profile'))
      {
        get_header('admindealerprofile');
      }
      else if(is_page('admin-user-registration'))       
      {
        get_header('adminuserregistration');
      }
      else if(is_page('admin-update-winrate'))
      {
        get_header('adminupdatewinrate');
      }
      else if(is_page('admin-user-limit-changes'))  
      {
        get_header('adminuserlimitchanges');
      }
      else if(is_page('admin-bet-no-limit'))  
      {
        get_header('adminbetnolimit');
      }
      else if(is_page('admin-user-payment'))
      {
        get_header('adminuserpayment');
      }
      else if(is_page('admin-user-win-list'))
      {
        get_header('adminuserwinlist');
      }
      else if(is_page('admin-mag-user-bet'))
      {
        get_header('adminmaguserbet');
      } 
      else if(is_page('4d-result-database-connection'))
      {
        get_header('db');
      }
      else if(is_page('login-process'))
      {
        get_header('loginprocess');
      }
      else if(is_page('user-logout'))
      {
        get_header('userlogout');
      }
      else if(is_page('admin-login-process'))
      {
        get_header('adminloginprocess');
      }
      else if (is_page('admin-logout'))
      {
        get_header('adminloginprocess');
      }
      else if(is_page('admin-main-menu-result-submit'))
      {
        get_header('adminmainmenuprocess');
      }
      else if(is_page('userbet-insert'))
      {
        get_header('userbetinsert');
      }
      else if(is_page('userbet-delete'))
      {
        get_header('userbetdelete');
      }
      else if(is_page('userbet-edit'))
      {
        get_header('userbetedit');
      }
      else if(is_page('userbet-select'))
      {
        get_header('userbetselect');
      }
      else if(is_page('user-win-4d-result'))
      {
        get_header('userwinfourdresult');
      }
      else if(is_page('admin-store-registration'))
      {
        get_header('adminstoreregistration');
      }
      else if(is_page('admin-store-user-limit-changes'))
      {
        get_header('adminstoreuserlimitchanges');   
      }
      else if(is_page('admin-find-bet-no-limit'))
      {
        get_header('adminfindbetnolimit');
      }
      else if(is_page('admin-store-registration-process'))
      {
         get_header('adminstoreregistrationprocess');
      }
      else
      {
	     get_header();
	    }
	    wp_head();
	?>
<div id="main">
<div id="content">
<p><?php if (have_posts()) : while (have_posts()) : the_post(); ?></p>
<p><?php the_content(__('(more...)')); ?></p>
<p><?php endwhile; else: ?></p>
<p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
<p><?php endif; ?></p>
</div>
</div>
<?php 
if(is_page('user-bet'))
{
get_footer('userbet');
}
else if(is_page('dealer-percentage'))
{
get_footer('userguidepage');
}
else if(is_page('second-sub-dealer-profile'))
{
get_footer('userguidepage');
}
else if(is_page('sub-dealer-profile'))
{
get_footer('userguidepage');
}
else if(is_page('sub-dealer-registration'))
{
get_footer('userguidepage');
}
else if(is_page('user-bet'))
{
get_footer('userguidepage');
}
else if(is_page('user-guide-page'))
{
get_footer('userguidepage');
}
else if(is_page('admin-enter-result'))
{
get_footer('adminmainmenu');
}
else if(is_page('user-4d-result'))
{
get_footer('userguidepage');
}
else if(is_page('insert-bet-calculation'))
{
  get_footer('userguidepage');
}
else if(is_page('admin-4d-results')) 
{
get_footer('adminmainmenu');
}
else if(is_page('admin-user-profile'))
{
get_footer('adminmainmenu');
}
else if(is_page('admin-dealer-profile'))
{
get_footer('adminmainmenu');  
}
else if(is_page('admin-user-registration')) 
{
get_footer('adminmainmenu');  
}
else if(is_page('admin-update-winrate'))
{
get_footer('adminmainmenu');
}
else if(is_page('admin-user-limit-changes'))  
{
get_footer('adminmainmenu');
}
else if(is_page('admin-bet-no-limit'))
{
get_footer('adminmainmenu');
}
else if(is_page('admin-user-payment'))
{
  get_footer('adminmainmenu');
}
else if(is_page('admin-user-win-list'))
{
   get_footer('adminmainmenu');
}
else if(is_page('admin-mag-user-bet'))
{
  get_footer('adminmainmenu');  
}
else if(is_page('4d-result-database-connection'))
{
  get_footer('adminmainmenu');
}
else if(is_page('dealer-store-dealer-registration'))
{
  get_footer('userguidepage');
}
else if(is_page('login-process'))
{
  get_footer('userguidepage');
}
else if('user-logout')
{
  get_footer('userguidepage');
}
else if(is_page('admin-login-process'))
{
  get_footer('userguidepage');
}
else if(is_page('admin-main-menu-result-submit'))
{
  get_footer('userguidepage');
}
else if(is_page('userbet-insert'))
{
  get_footer();
}
else if(is_page('userbet-delete'))
{
  get_footer();
}
else if(is_page('userbet-edit'))
{
  get_footer();
}
else if(is_page('userbet-select'))
{
  get_footer();
}
else if (is_page('admin-logout'))
{
 get_footer();
}
else if(is_page('user-win-4d-result'))
{
get_footer('userguidepage');
}
else if(is_page('admin-store-registration'))
{
    get_footer('adminmainmenu');
}
else if(is_page('admin-store-user-limit-changes'))
{
      get_footer('adminmainmenu');
}
else if(is_page('admin-find-bet-no-limit'))
{
  get_footer('adminmainmenu');
}
else if(is_page('admin-find-bet-no-limit'))
{
  get_footer('adminmainmenu');
}
else if(is_page('admin-store-registration-process'))
{
get_footer('adminmainmenu');
}
else
{
get_footer();
}
wp_footer();
?>