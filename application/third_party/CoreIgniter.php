<?php

/**
 * Custom exception for CoreIgniter
 */
class CoreIgniterException extends Exception {}

/**
 * CoreIgniter class
 *
 * Creates a CodeIgniter instance without overhead like URL processing, etc.
 * Suitable for accessing session or another native CodeIgniter's resources
 * in the same manner as using $this variable.
 */
class CoreIgniter
{
    
    /**
     * Version of the library
     */
    const VERSION = '1.5';
    
    /**
     * Internal storage of CodeIgniter super object instance
     * 
     * @static
     * @access protected
     */
    protected static $instance;
    
    /**
     * Initializes the CodeIgniter super object instance
     * 
     * @static
     * @access public
     * @param string $basepath          Absolute path to CodeIgniter system folder
     * @param string $apppath           Absolute path to CodeIgniter application folder
     * @param string $environment       Optional environment of the CodeIgniter instance
     * @param string $assign_to_config  Optional config from index.php if it is used
     * @throws CoreIgniterException if the instance is already initialized or unreachable paths provided
     * @return object CodeIgniter instance
     */
    public static function init($basepath, $apppath, $environment = null, $assign_to_config = array())
    {
        if (self::$instance) {
            throw new CoreIgniterException('Codeigniter instance is already initialized');
        }
        
        if (!is_dir($basepath)) {
            throw new CoreIgniterException('Supplied base path is not a directory');
        } else {
            $basepath = rtrim($basepath, '/').'/';
        }
        
        if (!is_dir($apppath)) {
            throw new CoreIgniterException('Supplied application path is not a directory');
        } else {
            $apppath = rtrim($apppath, '/').'/';
        }
        
        define('BASEPATH', $basepath);
        define('APPPATH', $apppath);
        define('EXT', '.php');
        define('ENVIRONMENT', $environment ? $environment : 'development');

        //custom MANUAL
        /*======================= start custom by arisnew ============================================*/
        define('VIEWPATH', APPPATH.'views');

        if (extension_loaded('mbstring'))
        {
            @define('MB_ENABLED', TRUE);
            // mbstring.internal_encoding is deprecated starting with PHP 5.6
            // and it's usage triggers E_DEPRECATED messages.
            @ini_set('mbstring.internal_encoding', $charset);
            // This is required for mb_convert_encoding() to strip invalid characters.
            // That's utilized by CI_Utf8, but it's also done for consistency with iconv.
            @mb_substitute_character('none');
        }
        else
        {
            @define('MB_ENABLED', FALSE);
        }

        // There's an ICONV_IMPL constant, but the PHP manual says that using
        // iconv's predefined constants is "strongly discouraged".
        if (extension_loaded('iconv'))
        {
            @define('ICONV_ENABLED', TRUE);
            // iconv.internal_encoding is deprecated starting with PHP 5.6
            // and it's usage triggers E_DEPRECATED messages.
            @ini_set('iconv.internal_encoding', $charset);
        }
        else
        {
            @define('ICONV_ENABLED', FALSE);
        }
        
        /*======================= end custom by arisnew ============================================*/
        
        require(BASEPATH.'core/Common.php');
        
        if (file_exists(APPPATH.'config/'.ENVIRONMENT.'/constants.php')) {
            require(APPPATH.'config/'.ENVIRONMENT.'/constants.php');
        } else {
            require(APPPATH.'config/constants.php');
        }
        
        $GLOBALS['CFG'] =& load_class('Config', 'core');
        //$GLOBALS['CFG']->_assign_to_config($assign_to_config);    //not use if CI 3
        $GLOBALS['UNI'] =& load_class('Utf8', 'core');
        if (file_exists($basepath.'core/Security.php')) {
            $GLOBALS['SEC'] =& load_class('Security', 'core');
        }
        load_class('Input', 'core');
        load_class('Lang', 'core');
        
        require(BASEPATH.'core/Controller.php');
        
        function &get_instance() {
            return CI_Controller::get_instance();
        }
        
        if (file_exists(APPPATH.'core/'.$GLOBALS['CFG']->config['subclass_prefix'].'Controller.php')) {
            require APPPATH.'core/'.$GLOBALS['CFG']->config['subclass_prefix'].'Controller.php';
            $class = $GLOBALS['CFG']->config['subclass_prefix'].'Controller';
        } else {
            $class = 'CI_Controller';
        }
        
        self::$instance = new $class();
        
        return self::$instance;
    }
    
    /**
     * Getter for the CodeIgniter instance object
     * 
     * @static
     * @access public
     * @throws CoreIgniterException if the instance is not yet initialized
     * @return object CI instance
     */
    public static function instance()
    {
        if (!self::$instance) {
            throw new CoreIgniterException('CodeIgniter instance is not initialized yet');
        }
        return self::$instance;
    }
    
}
