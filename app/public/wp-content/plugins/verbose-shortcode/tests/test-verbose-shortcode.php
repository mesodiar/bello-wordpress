<?php

require_once( WP_PLUGIN_DIR . '/verbose-shortcode/verbose-shortcode.php' );

class VerboseShortcodeTest extends WP_UnitTestCase {
    public function setUp(){
        parent::setUp();
    }
    // public function test_verbose_shortcode_should_show_who_is_most_verbose(){
    //     $expected = '<strong>Thor</strong>';
    //     $actual = do_shortcode('[verbose]');
    //     $this->assertEquals( $actual, $expected );
    // }
    public function test_verbose_shortcode_should_use_specify_font_size(){
        $expected = '<strong style="font-size: 100px;">Thor</strong>';
        $actual = do_shortcode('[verbose size="100"]');
        $this->assertEquals( $actual, $expected );
    }
}
