<?php

 
 class accessPlugin extends Plugin {
    public function init()
	{
		$this->dbFields = array(
		
            'textcolor' => '',
            'backgroundcolor' =>'',
            'title'=>'Regulation Title',
            'agreebtn'=>'I accept',
            'notagreebtn'=>'I not accept',
            'regulation'=>'Regulation content',
            'showafteraccept' => '',
            'disablesource' =>'',
		);
	}

    public function form(){

        global $L;

        
    $forms ='
    
    <label>'.$L->get('textcolor').'</label>
    <input type="color" class="form-control"  value="'.$this->getValue('textcolor').'" name="textcolor">
    <label>'.$L->get('backgroundcolor').'</label>
    <input type="color" class="form-control" value="'.$this->getValue('backgroundcolor').'" name="backgroundcolor">

    <label>'.$L->get('title').'</label>

    <input type="text" value="'.$this->getValue('title').'" name="title">

    <label>'.$L->get('agree-btn').'</label>

    <input type="text"  value="'.$this->getValue('agreebtn').'" name="agreebtn">

    <label>'.$L->get('not-agree-btn').'</label>
    <input type="text" value="'.$this->getValue('notagreebtn').'" name="notagreebtn">
    
    <label>'.$L->get('regulations').'</label>
    <textarea style="height:400px" class="regulation jseditor" id="jseditor" name="regulation">

    '.$this->getValue('regulation').'

    </textarea>

    <label>'.$L->get('showafteraccept').'</label>

    <select name="showafteraccept" class="form-control">
<option value="yes"'.($this->getValue('showafteraccept')=="yes" ? "selected":"" ).'>'.$L->get('yes').'</option>
<option value="no" '.($this->getValue('showafteraccept')=="no" ? "selected":"" ).'>'.$L->get('no').'</option>

    </select>

    
    <label>'.$L->get('disablesource').'</label>

    <select name="disablesource" class="form-control">
<option value="yes"'.($this->getValue('disablesource')=="yes" ? "selected":"" ).'>'.$L->get('yes').'</option>
<option value="no" '.($this->getValue('disablesource')=="no" ? "selected":"" ).'>'.$L->get('no').'</option>

    </select>

    <br>
   

    <link rel="stylesheet" type="text/css" href="/bl-plugins/tinymce/css/tinymce_toolbar.css">
    <script src="/bl-plugins/tinymce/tinymce/tinymce.min.js?version=5.10.5"></script>
    <script>

	// Insert an image in the editor at the cursor position
	// Function required for Bludit
	function editorInsertMedia(filename) {
		tinymce.activeEditor.insertContent("<img src=\""+filename+"\" alt=\"\">");
	}

	// Insert a linked image in the editor at the cursor position
	// Function required for Bludit
	function editorInsertLinkedMedia(filename, link) {
		tinymce.activeEditor.insertContent("<a href=\""+link+"\"><img src=\""+filename+"\" alt=\"\"></a>");
	}

	// Returns the content of the editor
	// Function required for Bludit
	function editorGetContent() {
		return tinymce.get("jseditor").getContent();
	}

	tinymce.init({
		selector: "#jseditor",
		auto_focus: "jseditor",
		element_format : "html",
		entity_encoding : "raw",
		skin: "oxide",
		schema: "html5",
		statusbar: false,
		menubar:false,
		branding: false,
		browser_spellcheck: true,
		pagebreak_separator: PAGE_BREAK,
		paste_as_text: true,
		remove_script_host: false,
		convert_urls: true,
		relative_urls: false,
		valid_elements: "*[*]",
		cache_suffix: "?version=5.10.5",
		
		plugins: ["code autolink image link pagebreak advlist lists textpattern table"],
		toolbar1: "formatselect bold italic forecolor backcolor removeformat | bullist numlist table | blockquote alignleft aligncenter alignright | link unlink pagebreak image code",
		toolbar2: "",
		language: "en",
		content_css: "/bl-plugins/tinymce/css/tinymce_content.css",
		codesample_languages: [],
	});

</script>

<div class="bg-light col-md-12 my-3  d-flex py-2 justify-content-between text-center border">
      
<p class="lead m-0">buy me ☕ if you want saw new plugins:)  </p>

<a href="https://www.paypal.com/donate/?hosted_button_id=TW6PXVCTM5A72">
<img alt="" src="https://www.paypalobjects.com/en_US/i/btn/btn_donate_LG.gif" border="0">
</a>

</div>
    ';


    echo $forms;


    }



        public function siteHead() {
           echo '<link rel="stylesheet" href="'.DOMAIN_BASE.'/bl-plugins/access-plugin/css/style.css">';
           echo '<script src="'.DOMAIN_BASE.'/bl-plugins/access-plugin/js/script.js" defer></script>';
        }


        public function siteBodyBegin(){

            include('accessTemplate.php');

        }

 
    }
?>