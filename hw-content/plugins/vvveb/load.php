<?php

/**
 * Load
 * 
 * Select page editor & display plugins data
 */

// plugins & Data
$plugin = file_get_contents('../hw-content/plugins/' . $public . '/plugin.json');
$about = json_decode($plugin);

?>
<div class="d-flex bd-highlight">
    <div class="p-2 flex-grow-1 bd-highlight">
        <h5 class=""><?php echo $about->name ?></h5>
    </div>
    <div class="p-2 bd-highlight">
        <nav>
            <div class="nav nav-tabs" id="nav-tab" role="tablist">
                <button class="nav-link active" id="nav-home-tab" data-bs-toggle="tab" data-bs-target="#nav-home" type="button" role="tab" aria-controls="nav-home" aria-selected="true">Setting</button>
            </div>
        </nav>
    </div>
</div>
<div class="py-3"></div>
<div class="row">
    <div class="col-lg-10">
        <h4><?php echo $about->name ?></h4>
        <p>Version: <?php echo $about->version ?></p>
        <p>Author: <?php echo $about->author ?></p>
        <br />
        <p>VvvebJs Drag and drop website builder javascript library. Built with jQuery and Bootstrap 5.</p>
        <h4>Features</h4>
        <ul>
            <li>Components and blocks/snippets drag and drop and in page insert.</li>
            <li>Components/Sections/Blocks list search.</li>
            <li>Bootstrap 5 components.</li>
            <li>Media gallery with integrated CC0 image search and server upload support.</li>
            <li>Image, video and iframe elements resize handles.</li>
            <li>Full Google fonts list support for font selection.</li>
            <li>Youtube, Google maps, Charts.js etc widgets.</li>
            <li>SVG Icon component bundled with hundreds of free icons.</li>
            <li>Theme global typography and color pallette editor.</li>
        </ul>
        <br />
        <a href="<?php echo $about->homepage ?>" target="_blank">Visit Site</a>
    </div>
</div>
