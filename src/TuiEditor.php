<?php

namespace HnhDigital\LaravelFrontendAssets;

use FrontendAsset as FA;

class TuiEditor
{
    public function __construct($version = false)
    {
        FA::package('Jquery');
        FA::package('Highlight', 'github');
        FA::package('CodeMirror');
        FA::package('SquireRte');
        FA::package('ToMark');
        FA::package('MarkdownIt');
        FA::package('Raphael');

        if (!env('APP_CDN', true)) {
            FA::add('vendor/tui-editor/tui-editor.css');
            FA::add('vendor/tui-editor/tui-editor-contents.css');
            FA::add('vendor/to-mark.js');
            FA::add('https://nhnent.github.io/tui.editor/api/latest/lib/plantuml-encoder/dist/plantuml-encoder.js');
            FA::add('vendor/raphael.js');
            FA::add('vendor/tui-code-snippet.js');
            FA::add('vendor/tui-color-picker.js');
            FA::add('vendor/tui-editor/tui-editor-Editor-all.js');
        } else {
            $version = FA::version(class_basename(__CLASS__), $version);
            $version_to_mark = FA::version('ToMark');
            $version_color_picker = FA::version('TuiColorPicker');
            $version_raphael = FA::version('Raphael');

            FA::add('https://uicdn.toast.com/tui-editor/v'.$version.'/tui-editor.min.css');
            FA::add('https://uicdn.toast.com/tui-editor/v'.$version.'/tui-editor-contents.min.css');
            FA::add('https://uicdn.toast.com/to-mark/v'.$version_to_mark.'/to-mark.min.js');
            FA::add('https://nhnent.github.io/tui.editor/api/latest/lib/plantuml-encoder/dist/plantuml-encoder.js');
            FA::add('https://cdnjs.com/libraries/raphael/'.$version_raphael.'/raphael.min.js');     
            FA::add('https://uicdn.toast.com/tui.code-snippet/v'.$version_code_snippet.'/tui-code-snippet.min.js');
            FA::add('https://uicdn.toast.com/tui-color-picker/v'.$version_color_picker.'/tui-color-picker.min.js');
            FA::add('https://uicdn.toast.com/tui-editor/v'.$version.'/tui-editor-Editor-all.min.js');
        }
    }
}
