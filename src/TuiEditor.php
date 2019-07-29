<?php

namespace HnhDigital\LaravelFrontendAssets;

class TuiEditor
{
    public function __construct($version = false)
    {
        app('FrontendAsset')->package('Jquery');
        app('FrontendAsset')->package('Highlight', 'github');
        app('FrontendAsset')->package('CodeMirror');
        app('FrontendAsset')->package('SquireRte');
        app('FrontendAsset')->package('ToMark');
        app('FrontendAsset')->package('MarkdownIt');
        app('FrontendAsset')->package('Raphael');

        if (!config('hnhdigital.assets.cdn', true)) {
            app('FrontendAsset')->add('vendor/tui-editor/tui-editor.css');
            app('FrontendAsset')->add('vendor/tui-editor/tui-editor-contents.css');
            app('FrontendAsset')->add('vendor/to-mark.js');
            app('FrontendAsset')->add('vendor/plantuml-encoder.js');
            app('FrontendAsset')->add('vendor/tui-code-snippet.js');
            app('FrontendAsset')->add('vendor/tui-color-picker.js');
            app('FrontendAsset')->add('vendor/tui-editor/tui-editor-Editor-all.js');
        } else {
            $version = app('FrontendAsset')->version(class_basename(__CLASS__), $version);
            $version_code_snippet = app('FrontendAsset')->version('TuiCodeSnippet');
            $version_color_picker = app('FrontendAsset')->version('TuiColorPicker');

            app('FrontendAsset')->add('https://uicdn.toast.com/tui-editor/v'.$version.'/tui-editor.min.css');
            app('FrontendAsset')->add('https://uicdn.toast.com/tui-editor/v'.$version.'/tui-editor-contents.min.css');
            app('FrontendAsset')->add('vendor/plantuml-encoder.min.js');
            app('FrontendAsset')->add('https://uicdn.toast.com/tui.code-snippet/v'.$version_code_snippet.'/tui-code-snippet.min.js');
            app('FrontendAsset')->add('https://uicdn.toast.com/tui-color-picker/v'.$version_color_picker.'/tui-color-picker.min.js');
            app('FrontendAsset')->add('https://uicdn.toast.com/tui-editor/v'.$version.'/tui-editor-Editor-all.min.js');
        }
    }
}
