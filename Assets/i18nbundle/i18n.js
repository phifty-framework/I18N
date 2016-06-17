var I18N = {  };
I18N.switchCurrentLanguage = function(lang) {
    // first find all .lang element.
    $('.lang').hide()
    // show panels for the current language.
    $('.lang-' + lang).show();
};
I18N.initLangSwitch = function($el) {
    // quick patch for current lang selector
    $el.find('.lang-switch').change(function() {
        var lang = $(this).val();
        I18N.switchCurrentLanguage(lang);
    });
    var selectedLang = $el.find('.lang-switch').val();
    if ( selectedLang ) {
        I18N.switchCurrentLanguage(selectedLang);
    }
};
