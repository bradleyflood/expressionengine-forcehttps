<?php

if ( ! defined('BASEPATH')) exit('No direct script access allowed');

$plugin_info = array(
  'pi_name'        => 'PunchBuggy - Force HTTPS',
  'pi_version'     => '1.0.0',
  'pi_author'      => 'Bradley Flood',
  'pi_author_url'  => 'http://www.punchbuggy.com.au/',
  'pi_description' => 'Tags to force HTTPS or just HTTP',
  'pi_usage'       => Pb_forcehttps::usage()
  );


class Pb_forcehttps
{

  public $return_data = ""; 

  public function Pb_forcehttps()
  {
    $this->EE =& get_instance();
  }
  
  /**
   * Force HTTPS
   * @access  public
   * @return  null
   */
  public function tohttps()
  {
    // If HTTP redirect to HTTPs
    if( !isset($_SERVER['HTTPS']) )
    {
      header('Location: https://'.$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'], null, 301);
      exit;
    }
  }
  
  /**
   * Force HTTP
   * @access  public
   * @return  null
   */
  public function tohttp()
  {
    // If HTTPS redirect to HTTP
    if( isset($_SERVER['HTTPS']) )
    {
      header('Location: http://'.$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'], null, 301);
      exit;
    }
  }


  /**
   * Usage
   * This function describes how the plugin is used.
   * @access  public
   * @return  string
   */
  
  public function usage()
  {
    ob_start(); 
    ?>
      Force HTTPS or HTTP
      
      To force a page to HTTPS use: {exp:pb_forcehttps:tohttps}
      
      To force a page back to HTTP use: {exp:pb_forcehttps:tohttp}
      

    <?php
    $buffer = ob_get_contents();
    
    ob_end_clean(); 

    return $buffer;
  }

}
