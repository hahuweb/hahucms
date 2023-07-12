<?php

/**
 * Site
 * 
 * Site, pages and theme data
 */


require 'load.php';

class site extends dbConnect
{

    public $siteInfo;
    public $blogInfo;
    public $pagesInfo;
    public $themesInfo;
    public $pages_path;
    public $pages_folder;
    public $themes_path;
    public $themes_folder;


    // values
    public function values()
    {
        $this->siteInfo = 'hw-includes/setting/site/site.json';
        $this->pagesInfo = 'hw-includes/setting/site/pages.json';
        $this->themesInfo = 'hw-includes/setting/site/theme.json';
        $this->blogInfo = 'hw-includes/setting/site/blog.json';
        
    }

    public function pageValues()
    {
        $this->pages_path = glob('hw-includes/pages/*.*');
        $this->themes_folder = 'hw-includes/pages/';
    }

    public function themeValues($path)
    {
        $this->themes_path = glob($path . '/*.*');
        $this->themes_folder = $path . '/';
    }

    /**
     * Pages Information
     */
    public function pagesInfo()
    {
        $this->values();
        $pages = file_get_contents($this->pagesInfo);
        $pagesData = json_decode($pages);
        return $pagesData;
    }

    /**
     * Theme Information
     */
    public function themeInfo()
    {
        $this->values();
        $theme = file_get_contents($this->themesInfo);
        $themeData = json_decode($theme);
        return $themeData;
    }


    /**
     * Sites Information
     */
    public function siteInfo()
    {
        $this->values();
        $file = file_get_contents($this->siteInfo);
        $data = json_decode($file);
?>
        <title><?php echo $data->title; ?></title>
        <meta name="description" content="<?php echo $data->description; ?>">
        <meta name="keywords" content="<?php echo $data->keyword; ?>">
        <meta name="author" content="<?php echo $data->author; ?>">
        <link rel="icon" href="<?php echo $data->favicon; ?>" type="image/x-icon">
<?php

    }

    /**
     * Theme css
     */
    public function css()
    {
        $get_theme = $this->themeInfo();
        if ($get_theme->theme_name && $get_theme->theme_url == true) {
            if (file_exists($get_theme->theme_url . '/data/content.php')) {
                require $get_theme->theme_url . '/data/content.php';
            }
        }
    }

    /**
     * Theme js
     */
    public function js()
    {
        $get_theme = $this->themeInfo();
        if ($get_theme->theme_name && $get_theme->theme_url == true) {
            if (file_exists($get_theme->theme_url . '/data/script.php')) {
                require $get_theme->theme_url . '/data/script.php';
            }
        }
    }



    /**
     * Select pages
     */
    public function page($name)
    {
        $this->pageValues();
        foreach ($this->pages_path as $key => $pages) {
            $supported_file = array(
                'html'
            );
            $ext = strtolower(pathinfo($pages, PATHINFO_EXTENSION));
            $path_parts = pathinfo($pages, PATHINFO_EXTENSION);
            $pathInfo = pathinfo($pages);
            $filename = $pathInfo['filename'];

            if (in_array($ext, $supported_file)) {
                if ($filename == $name) {
                    require $this->themes_folder . $filename . '.' . $path_parts;
                }
            }
        }
    }

    public function themePage($path, $name)
    {
        $this->themeValues($path);
        foreach ($this->themes_path as $key => $pages) {
            $supported_file = array(
                'html'
            );
            $ext = strtolower(pathinfo($pages, PATHINFO_EXTENSION));
            $path_parts = pathinfo($pages, PATHINFO_EXTENSION);
            $pathInfo = pathinfo($pages);
            $filename = $pathInfo['filename'];

            if (in_array($ext, $supported_file)) {
                if ($filename == $name) {
                    require $this->themes_folder . $filename . '.' . $path_parts;
                }
            }
        }
    }

    
    /**
     * Blog Data
     */
    public function blogInfo()
    {
        $this->values();
        $blog = file_get_contents($this->blogInfo);
        $blgData = json_decode($blog);
        return $blgData;
    }
}
