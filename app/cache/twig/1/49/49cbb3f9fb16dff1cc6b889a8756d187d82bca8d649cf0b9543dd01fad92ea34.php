<?php

/* default/layout/footer.js.tpl */
class __TwigTemplate_20c4c22768e68f611a92d6e3b6cce50c952be25a6c3d3a29d439c317ad0961ee extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<script>
    /* Makes row highlighting possible */
    \$(document).ready( function() {
        // Date time settings.
        moment.locale('";
        // line 5
        echo (isset($context["locale"]) ? $context["locale"] : null);
        echo "');
        \$.datepicker.setDefaults(\$.datepicker.regional[\"";
        // line 6
        echo (isset($context["locale"]) ? $context["locale"] : null);
        echo "\"]);
        \$.datepicker.regional[\"local\"] = \$.datepicker.regional[\"";
        // line 7
        echo (isset($context["locale"]) ? $context["locale"] : null);
        echo "\"];

        // Chosen select
        \$(\".chzn-select\").chosen({
            disable_search_threshold: 10,
            no_results_text: '";
        // line 12
        echo twig_escape_filter($this->env, get_lang("SearchNoResultsFound"), "js");
        echo "',
            placeholder_text_multiple: '";
        // line 13
        echo twig_escape_filter($this->env, get_lang("SelectSomeOptions"), "js");
        echo "',
            placeholder_text_single: '";
        // line 14
        echo twig_escape_filter($this->env, get_lang("SelectAnOption"), "js");
        echo "',
            width: \"100%\"
        });

        // Bootstrap tabs.
        \$('.tab-wrapper a').click(function (e) {
            e.preventDefault();
            \$(this).tab('show');

            //\$('#tabs a:first').tab('show') // Select first tab
        });

        // Fixes bug when loading links inside a tab.
        \$('.tab-wrapper .tab-pane a').unbind();

        /**
         * Advanced options
         * Usage
         * <a id=\"link\" href=\"url\">Advanced</a>
         * <div id=\"link_options\">
         *     hidden content :)
         * </div>
         * */
        \$(\".advanced_options\").on(\"click\", function (event) {
            event.preventDefault();
            var id = \$(this).attr('id') + '_options';
            var button = \$(this);
            button.toggleClass('active');
            \$(\"#\" + id).toggle();
        });

        /**
         * <a class=\"advanced_options_open\" href=\"http://\" rel=\"div_id\">Open</a>
         * <a class=\"advanced_options_close\" href=\"http://\" rel=\"div_id\">Close</a>
         * <div id=\"div_id\">Div content</div>
         * */
        \$(\".advanced_options_open\").on(\"click\", function (event) {
            event.preventDefault();
            var id = \$(this).attr('rel');
            \$(\"#\" + id).show();
        });

        \$(\".advanced_options_close\").on(\"click\", function (event) {
            event.preventDefault();
            var id = \$(this).attr('rel');
            \$(\"#\" + id).hide();
        });

        // Adv multi-select search input.
        \$('.select_class_filter').each( function () {
            var inputId = \$(this).attr('id');
            inputId = inputId.replace('-filter', '');
            \$(\"#\" + inputId).filterByText(\$(\"#\" + inputId + \"-filter\"));
        });

        \$(\".jp-jplayer audio\").addClass('skip');

        // Mediaelement
        if ( ";
        // line 72
        echo (isset($context["show_media_element"]) ? $context["show_media_element"] : null);
        echo " == 1) {
            jQuery('video:not(.skip), audio:not(.skip)').mediaelementplayer(/* Options */);
        }

        // Table highlight.
        \$(\"form .data_table input:checkbox\").click(function () {
            if (\$(this).is(\":checked\")) {
                \$(this).parentsUntil(\"tr\").parent().addClass(\"row_selected\");
            } else {
                \$(this).parentsUntil(\"tr\").parent().removeClass(\"row_selected\");
            }
        });

        /* For non HTML5 browsers */
        if (\$(\"#formLogin\".length > 1)) {
            \$(\"input[name=login]\").focus();
        }

        // Tool tip (in exercises)
        var tip_options = {
            placement: 'right'
        };
        \$('.boot-tooltip').tooltip(tip_options);
        var more = '";
        // line 95
        echo twig_escape_filter($this->env, get_lang("SeeMore"), "js");
        echo "';
        var close = '";
        // line 96
        echo twig_escape_filter($this->env, get_lang("Close"), "js");
        echo "';
        \$('.list-teachers').readmore({
            speed: 75,
            moreLink: '<a href=\"#\">' + more + '</a>',
            lessLink: '<a href=\"#\">' + close + '</a>',
            collapsedHeight: 35,
            blockCSS: 'display: block; width: 100%;'
        });
    });
\t
\t
\t//javascript custom roanja
/**
 * Resize function without multiple trigger
 * 
 * Usage:
 * \$(window).smartresize(function(){  
 *     // code here
 * });
 */
(function(\$,sr){
    // debouncing function from John Hann
    // http://unscriptable.com/index.php/2009/03/20/debouncing-javascript-methods/
    var debounce = function (func, threshold, execAsap) {
      var timeout;

        return function debounced () {
            var obj = this, args = arguments;
            function delayed () {
                if (!execAsap)
                    func.apply(obj, args); 
                timeout = null; 
            }

            if (timeout)
                clearTimeout(timeout);
            else if (execAsap)
                func.apply(obj, args);

            timeout = setTimeout(delayed, threshold || 100); 
        };
    };

    // smartresize 
    jQuery.fn[sr] = function(fn){  return fn ? this.bind('resize', debounce(fn)) : this.trigger(sr); };

})(jQuery,'smartresize');
/**
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

var CURRENT_URL = window.location.href.split('#')[0].split('?')[0],
    \$BODY = \$('body'),
    \$MENU_TOGGLE = \$('#menu_toggle'),
    \$SIDEBAR_MENU = \$('#sidebar-menu'),
    \$SIDEBAR_FOOTER = \$('.sidebar-footer'),
    \$LEFT_COL = \$('.left_col'),
    \$RIGHT_COL = \$('.right_col'),
    \$NAV_MENU = \$('.nav_menu'),
    \$FOOTER = \$('footer');

\t
\t
// Sidebar
function init_sidebar() {
// TODO: This is some kind of easy fix, maybe we can improve this
var setContentHeight = function () {
\t// reset height
\t\$RIGHT_COL.css('min-height', \$(window).height());

\tvar bodyHeight = \$BODY.outerHeight(),
\t\tfooterHeight = \$BODY.hasClass('footer_fixed') ? -10 : \$FOOTER.height(),
\t\tleftColHeight = \$LEFT_COL.eq(1).height() + \$SIDEBAR_FOOTER.height(),
\t\tcontentHeight = bodyHeight < leftColHeight ? leftColHeight : bodyHeight;

\t// normalize content
\tcontentHeight -= \$NAV_MENU.height() + footerHeight;

\t\$RIGHT_COL.css('min-height', contentHeight);
};

  \$SIDEBAR_MENU.find('a').on('click', function(ev) {
\t  console.log('clicked - sidebar_menu');
        var \$li = \$(this).parent();

        if (\$li.is('.active')) {
            \$li.removeClass('active active-sm');
            \$('ul:first', \$li).slideUp(function() {
                setContentHeight();
            });
        } else {
            // prevent closing menu if we are on child menu
            if (!\$li.parent().is('.child_menu')) {
                \$SIDEBAR_MENU.find('li').removeClass('active active-sm');
                \$SIDEBAR_MENU.find('li ul').slideUp();
            }else
            {
\t\t\t\tif ( \$BODY.is( \".nav-sm\" ) )
\t\t\t\t{
\t\t\t\t\t\$SIDEBAR_MENU.find( \"li\" ).removeClass( \"active active-sm\" );
\t\t\t\t\t\$SIDEBAR_MENU.find( \"li ul\" ).slideUp();
\t\t\t\t}
\t\t\t}
            \$li.addClass('active');

            \$('ul:first', \$li).slideDown(function() {
                setContentHeight();
            });
        }
    });

// toggle small or large menu 
\$MENU_TOGGLE.on('click', function() {
\t\tconsole.log('clicked - menu toggle');
\t\t
\t\tif (\$BODY.hasClass('nav-md')) {
\t\t\t\$SIDEBAR_MENU.find('li.active ul').hide();
\t\t\t\$SIDEBAR_MENU.find('li.active').addClass('active-sm').removeClass('active');
\t\t} else {
\t\t\t\$SIDEBAR_MENU.find('li.active-sm ul').show();
\t\t\t\$SIDEBAR_MENU.find('li.active-sm').addClass('active').removeClass('active-sm');
\t\t}

\t\$BODY.toggleClass('nav-md nav-sm');

\tsetContentHeight();
});

\t// check active menu
\t\$SIDEBAR_MENU.find('a[href=\"' + CURRENT_URL + '\"]').parent('li').addClass('current-page');

\t\$SIDEBAR_MENU.find('a').filter(function () {
\t\treturn this.href == CURRENT_URL;
\t}).parent('li').addClass('current-page').parents('ul').slideDown(function() {
\t\tsetContentHeight();
\t}).parent().addClass('active');

\t// recompute content when resizing
\t\$(window).smartresize(function(){  
\t\tsetContentHeight();
\t});

\tsetContentHeight();

\t// fixed sidebar
\tif (\$.fn.mCustomScrollbar) {
\t\t\$('.menu_fixed').mCustomScrollbar({
\t\t\tautoHideScrollbar: true,
\t\t\ttheme: 'minimal',
\t\t\tmouseWheel:{ preventDefault: true }
\t\t});
\t}
};
// /Sidebar

\tvar randNum = function() {
\t  return (Math.floor(Math.random() * (1 + 40 - 20))) + 20;
\t};


// Panel toolbox
\$(document).ready(function() {
    \$('.collapse-link').on('click', function() {
        var \$BOX_PANEL = \$(this).closest('.x_panel'),
            \$ICON = \$(this).find('i'),
            \$BOX_CONTENT = \$BOX_PANEL.find('.x_content');
        
        // fix for some div with hardcoded fix class
        if (\$BOX_PANEL.attr('style')) {
            \$BOX_CONTENT.slideToggle(200, function(){
                \$BOX_PANEL.removeAttr('style');
            });
        } else {
            \$BOX_CONTENT.slideToggle(200); 
            \$BOX_PANEL.css('height', 'auto');  
        }

        \$ICON.toggleClass('fa-chevron-up fa-chevron-down');
    });

    \$('.close-link').click(function () {
        var \$BOX_PANEL = \$(this).closest('.x_panel');

        \$BOX_PANEL.remove();
    });
});
// /Panel toolbox

// Tooltip
\$(document).ready(function() {
    \$('[data-toggle=\"tooltip\"]').tooltip({
        container: 'body'
    });
});
// /Tooltip

// Progressbar
if (\$(\".progress .progress-bar\")[0]) {
    \$('.progress .progress-bar').progressbar();
}
// /Progressbar

// Switchery
\$(document).ready(function() {
    if (\$(\".js-switch\")[0]) {
        var elems = Array.prototype.slice.call(document.querySelectorAll('.js-switch'));
        elems.forEach(function (html) {
            var switchery = new Switchery(html, {
                color: '#26B99A'
            });
        });
    }
});
// /Switchery


// iCheck
\$(document).ready(function() {
    if (\$(\"input.flat\")[0]) {
        \$(document).ready(function () {
            \$('input.flat').iCheck({
                checkboxClass: 'icheckbox_flat-green',
                radioClass: 'iradio_flat-green'
            });
        });
    }
});
// /iCheck

// Table
\$('table input').on('ifChecked', function () {
    checkState = '';
    \$(this).parent().parent().parent().addClass('selected');
    countChecked();
});
\$('table input').on('ifUnchecked', function () {
    checkState = '';
    \$(this).parent().parent().parent().removeClass('selected');
    countChecked();
});

var checkState = '';

\$('.bulk_action input').on('ifChecked', function () {
    checkState = '';
    \$(this).parent().parent().parent().addClass('selected');
    countChecked();
});
\$('.bulk_action input').on('ifUnchecked', function () {
    checkState = '';
    \$(this).parent().parent().parent().removeClass('selected');
    countChecked();
});
\$('.bulk_action input#check-all').on('ifChecked', function () {
    checkState = 'all';
    countChecked();
});
\$('.bulk_action input#check-all').on('ifUnchecked', function () {
    checkState = 'none';
    countChecked();
});

function countChecked() {
    if (checkState === 'all') {
        \$(\".bulk_action input[name='table_records']\").iCheck('check');
    }
    if (checkState === 'none') {
        \$(\".bulk_action input[name='table_records']\").iCheck('uncheck');
    }

    var checkCount = \$(\".bulk_action input[name='table_records']:checked\").length;

    if (checkCount) {
        \$('.column-title').hide();
        \$('.bulk-actions').show();
        \$('.action-cnt').html(checkCount + ' Records Selected');
    } else {
        \$('.column-title').show();
        \$('.bulk-actions').hide();
    }
}



// Accordion
\$(document).ready(function() {
    \$(\".expand\").on(\"click\", function () {
        \$(this).next().slideToggle(200);
        \$expand = \$(this).find(\">:first-child\");

        if (\$expand.text() == \"+\") {
            \$expand.text(\"-\");
        } else {
            \$expand.text(\"+\");
        }
    });
});

// NProgress
if (typeof NProgress != 'undefined') {
    \$(document).ready(function () {
        NProgress.start();
    });

    \$(window).load(function () {
        NProgress.done();
    });
}

\t
\t  //hover and retain popover when on popover content
        var originalLeave = \$.fn.popover.Constructor.prototype.leave;
        \$.fn.popover.Constructor.prototype.leave = function(obj) {
          var self = obj instanceof this.constructor ?
            obj : \$(obj.currentTarget)[this.type](this.getDelegateOptions()).data('bs.' + this.type);
          var container, timeout;

          originalLeave.call(this, obj);

          if (obj.currentTarget) {
            container = \$(obj.currentTarget).siblings('.popover');
            timeout = self.timeout;
            container.one('mouseenter', function() {
              //We entered the actual popover – call off the dogs
              clearTimeout(timeout);
              //Let's monitor popover content instead
              container.one('mouseleave', function() {
                \$.fn.popover.Constructor.prototype.leave.call(self, self);
              });
            });
          }
        };

        \$('body').popover({
          selector: '[data-popover]',
          trigger: 'click hover',
          delay: {
            show: 50,
            hide: 400
          }
        });


\tfunction gd(year, month, day) {
\t\treturn new Date(year, month - 1, day).getTime();
\t}
\t  
\t
\tfunction init_flot_chart(){
\t\t
\t\tif( typeof (\$.plot) === 'undefined'){ return; }
\t\t
\t\tconsole.log('init_flot_chart');
\t\t
\t\t
\t\t
\t\tvar arr_data1 = [
\t\t\t[gd(2012, 1, 1), 17],
\t\t\t[gd(2012, 1, 2), 74],
\t\t\t[gd(2012, 1, 3), 6],
\t\t\t[gd(2012, 1, 4), 39],
\t\t\t[gd(2012, 1, 5), 20],
\t\t\t[gd(2012, 1, 6), 85],
\t\t\t[gd(2012, 1, 7), 7]
\t\t];

\t\tvar arr_data2 = [
\t\t  [gd(2012, 1, 1), 82],
\t\t  [gd(2012, 1, 2), 23],
\t\t  [gd(2012, 1, 3), 66],
\t\t  [gd(2012, 1, 4), 9],
\t\t  [gd(2012, 1, 5), 119],
\t\t  [gd(2012, 1, 6), 6],
\t\t  [gd(2012, 1, 7), 9]
\t\t];
\t\t
\t\tvar arr_data3 = [
\t\t\t[0, 1],
\t\t\t[1, 9],
\t\t\t[2, 6],
\t\t\t[3, 10],
\t\t\t[4, 5],
\t\t\t[5, 17],
\t\t\t[6, 6],
\t\t\t[7, 10],
\t\t\t[8, 7],
\t\t\t[9, 11],
\t\t\t[10, 35],
\t\t\t[11, 9],
\t\t\t[12, 12],
\t\t\t[13, 5],
\t\t\t[14, 3],
\t\t\t[15, 4],
\t\t\t[16, 9]
\t\t];
\t\t
\t\tvar chart_plot_02_data = [];
\t\t
\t\tvar chart_plot_03_data = [
\t\t\t[0, 1],
\t\t\t[1, 9],
\t\t\t[2, 6],
\t\t\t[3, 10],
\t\t\t[4, 5],
\t\t\t[5, 17],
\t\t\t[6, 6],
\t\t\t[7, 10],
\t\t\t[8, 7],
\t\t\t[9, 11],
\t\t\t[10, 35],
\t\t\t[11, 9],
\t\t\t[12, 12],
\t\t\t[13, 5],
\t\t\t[14, 3],
\t\t\t[15, 4],
\t\t\t[16, 9]
\t\t];
\t\t
\t\t
\t\tfor (var i = 0; i < 30; i++) {
\t\t  chart_plot_02_data.push([new Date(Date.today().add(i).days()).getTime(), randNum() + i + i + 10]);
\t\t}
\t\t
\t\t
\t\tvar chart_plot_01_settings = {
          series: {
            lines: {
              show: false,
              fill: true
            },
            splines: {
              show: true,
              tension: 0.4,
              lineWidth: 1,
              fill: 0.4
            },
            points: {
              radius: 0,
              show: true
            },
            shadowSize: 2
          },
          grid: {
            verticalLines: true,
            hoverable: true,
            clickable: true,
            tickColor: \"#d5d5d5\",
            borderWidth: 1,
            color: '#fff'
          },
          colors: [\"rgba(38, 185, 154, 0.38)\", \"rgba(3, 88, 106, 0.38)\"],
          xaxis: {
            tickColor: \"rgba(51, 51, 51, 0.06)\",
            mode: \"time\",
            tickSize: [1, \"day\"],
            //tickLength: 10,
            axisLabel: \"Date\",
            axisLabelUseCanvas: true,
            axisLabelFontSizePixels: 12,
            axisLabelFontFamily: 'Verdana, Arial',
            axisLabelPadding: 10
          },
          yaxis: {
            ticks: 8,
            tickColor: \"rgba(51, 51, 51, 0.06)\",
          },
          tooltip: false
        }
\t\t
\t\tvar chart_plot_02_settings = {
\t\t\tgrid: {
\t\t\t\tshow: true,
\t\t\t\taboveData: true,
\t\t\t\tcolor: \"#3f3f3f\",
\t\t\t\tlabelMargin: 10,
\t\t\t\taxisMargin: 0,
\t\t\t\tborderWidth: 0,
\t\t\t\tborderColor: null,
\t\t\t\tminBorderMargin: 5,
\t\t\t\tclickable: true,
\t\t\t\thoverable: true,
\t\t\t\tautoHighlight: true,
\t\t\t\tmouseActiveRadius: 100
\t\t\t},
\t\t\tseries: {
\t\t\t\tlines: {
\t\t\t\t\tshow: true,
\t\t\t\t\tfill: true,
\t\t\t\t\tlineWidth: 2,
\t\t\t\t\tsteps: false
\t\t\t\t},
\t\t\t\tpoints: {
\t\t\t\t\tshow: true,
\t\t\t\t\tradius: 4.5,
\t\t\t\t\tsymbol: \"circle\",
\t\t\t\t\tlineWidth: 3.0
\t\t\t\t}
\t\t\t},
\t\t\tlegend: {
\t\t\t\tposition: \"ne\",
\t\t\t\tmargin: [0, -25],
\t\t\t\tnoColumns: 0,
\t\t\t\tlabelBoxBorderColor: null,
\t\t\t\tlabelFormatter: function(label, series) {
\t\t\t\t\treturn label + '&nbsp;&nbsp;';
\t\t\t\t},
\t\t\t\twidth: 40,
\t\t\t\theight: 1
\t\t\t},
\t\t\tcolors: ['#96CA59', '#3F97EB', '#72c380', '#6f7a8a', '#f7cb38', '#5a8022', '#2c7282'],
\t\t\tshadowSize: 0,
\t\t\ttooltip: true,
\t\t\ttooltipOpts: {
\t\t\t\tcontent: \"%s: %y.0\",
\t\t\t\txDateFormat: \"%d/%m\",
\t\t\tshifts: {
\t\t\t\tx: -30,
\t\t\t\ty: -50
\t\t\t},
\t\t\tdefaultTheme: false
\t\t\t},
\t\t\tyaxis: {
\t\t\t\tmin: 0
\t\t\t},
\t\t\txaxis: {
\t\t\t\tmode: \"time\",
\t\t\t\tminTickSize: [1, \"day\"],
\t\t\t\ttimeformat: \"%d/%m/%y\",
\t\t\t\tmin: chart_plot_02_data[0][0],
\t\t\t\tmax: chart_plot_02_data[20][0]
\t\t\t}
\t\t};\t
\t
\t\tvar chart_plot_03_settings = {
\t\t\tseries: {
\t\t\t\tcurvedLines: {
\t\t\t\t\tapply: true,
\t\t\t\t\tactive: true,
\t\t\t\t\tmonotonicFit: true
\t\t\t\t}
\t\t\t},
\t\t\tcolors: [\"#26B99A\"],
\t\t\tgrid: {
\t\t\t\tborderWidth: {
\t\t\t\t\ttop: 0,
\t\t\t\t\tright: 0,
\t\t\t\t\tbottom: 1,
\t\t\t\t\tleft: 1
\t\t\t\t},
\t\t\t\tborderColor: {
\t\t\t\t\tbottom: \"#7F8790\",
\t\t\t\t\tleft: \"#7F8790\"
\t\t\t\t}
\t\t\t}
\t\t};
        
\t\t
        if (\$(\"#chart_plot_01\").length){
\t\t\tconsole.log('Plot1');
\t\t\t
\t\t\t\$.plot( \$(\"#chart_plot_01\"), [ arr_data1, arr_data2 ],  chart_plot_01_settings );
\t\t}
\t\t
\t\t
\t\tif (\$(\"#chart_plot_02\").length){
\t\t\tconsole.log('Plot2');
\t\t\t
\t\t\t\$.plot( \$(\"#chart_plot_02\"), 
\t\t\t[{ 
\t\t\t\tlabel: \"Email Sent\", 
\t\t\t\tdata: chart_plot_02_data, 
\t\t\t\tlines: { 
\t\t\t\t\tfillColor: \"rgba(150, 202, 89, 0.12)\" 
\t\t\t\t}, 
\t\t\t\tpoints: { 
\t\t\t\t\tfillColor: \"#fff\" } 
\t\t\t}], chart_plot_02_settings);
\t\t\t
\t\t}
\t\t
\t\tif (\$(\"#chart_plot_03\").length){
\t\t\tconsole.log('Plot3');
\t\t\t
\t\t\t
\t\t\t\$.plot(\$(\"#chart_plot_03\"), [{
\t\t\t\tlabel: \"Registrations\",
\t\t\t\tdata: chart_plot_03_data,
\t\t\t\tlines: {
\t\t\t\t\tfillColor: \"rgba(150, 202, 89, 0.12)\"
\t\t\t\t}, 
\t\t\t\tpoints: {
\t\t\t\t\tfillColor: \"#fff\"
\t\t\t\t}
\t\t\t}], chart_plot_03_settings);
\t\t\t
\t\t};
\t  
\t} 
\t
\t\t
\t/* STARRR */
\t\t\t
\tfunction init_starrr() {
\t\t
\t\tif( typeof (starrr) === 'undefined'){ return; }
\t\tconsole.log('init_starrr');
\t\t
\t\t\$(\".stars\").starrr();

\t\t\$('.stars-existing').starrr({
\t\t  rating: 4
\t\t});

\t\t\$('.stars').on('starrr:change', function (e, value) {
\t\t  \$('.stars-count').html(value);
\t\t});

\t\t\$('.stars-existing').on('starrr:change', function (e, value) {
\t\t  \$('.stars-count-existing').html(value);
\t\t});
\t\t
\t  };
\t
\t
\tfunction init_JQVmap(){

\t\t//console.log('check init_JQVmap [' + typeof (VectorCanvas) + '][' + typeof (jQuery.fn.vectorMap) + ']' );\t
\t\t
\t\tif(typeof (jQuery.fn.vectorMap) === 'undefined'){ return; }
\t\t
\t\tconsole.log('init_JQVmap');
\t     
\t\t\tif (\$('#world-map-gdp').length ){
\t\t 
\t\t\t\t\$('#world-map-gdp').vectorMap({
\t\t\t\t\tmap: 'world_en',
\t\t\t\t\tbackgroundColor: null,
\t\t\t\t\tcolor: '#ffffff',
\t\t\t\t\thoverOpacity: 0.7,
\t\t\t\t\tselectedColor: '#666666',
\t\t\t\t\tenableZoom: true,
\t\t\t\t\tshowTooltip: true,
\t\t\t\t\tvalues: sample_data,
\t\t\t\t\tscaleColors: ['#E6F2F0', '#149B7E'],
\t\t\t\t\tnormalizeFunction: 'polynomial'
\t\t\t\t});
\t\t\t
\t\t\t}
\t\t\t
\t\t\tif (\$('#usa_map').length ){
\t\t\t
\t\t\t\t\$('#usa_map').vectorMap({
\t\t\t\t\tmap: 'usa_en',
\t\t\t\t\tbackgroundColor: null,
\t\t\t\t\tcolor: '#ffffff',
\t\t\t\t\thoverOpacity: 0.7,
\t\t\t\t\tselectedColor: '#666666',
\t\t\t\t\tenableZoom: true,
\t\t\t\t\tshowTooltip: true,
\t\t\t\t\tvalues: sample_data,
\t\t\t\t\tscaleColors: ['#E6F2F0', '#149B7E'],
\t\t\t\t\tnormalizeFunction: 'polynomial'
\t\t\t\t});
\t\t\t
\t\t\t}
\t\t\t
\t};
\t\t\t
\t    
\tfunction init_skycons(){
\t\t\t\t
\t\t\tif( typeof (Skycons) === 'undefined'){ return; }
\t\t\tconsole.log('init_skycons');
\t\t
\t\t\tvar icons = new Skycons({
\t\t\t\t\"color\": \"#73879C\"
\t\t\t  }),
\t\t\t  list = [
\t\t\t\t\"clear-day\", \"clear-night\", \"partly-cloudy-day\",
\t\t\t\t\"partly-cloudy-night\", \"cloudy\", \"rain\", \"sleet\", \"snow\", \"wind\",
\t\t\t\t\"fog\"
\t\t\t  ],
\t\t\t  i;

\t\t\tfor (i = list.length; i--;)
\t\t\t  icons.set(list[i], list[i]);

\t\t\ticons.play();
\t
\t}  
\t   
\t   
\tfunction init_chart_doughnut(){
\t\t\t\t
\t\tif( typeof (Chart) === 'undefined'){ return; }
\t\t
\t\tconsole.log('init_chart_doughnut');
\t 
\t\tif (\$('.canvasDoughnut').length){
\t\t\t
\t\tvar chart_doughnut_settings = {
\t\t\t\ttype: 'doughnut',
\t\t\t\ttooltipFillColor: \"rgba(51, 51, 51, 0.55)\",
\t\t\t\tdata: {
\t\t\t\t\tlabels: [
\t\t\t\t\t\t\"Symbian\",
\t\t\t\t\t\t\"Blackberry\",
\t\t\t\t\t\t\"Other\",
\t\t\t\t\t\t\"Android\",
\t\t\t\t\t\t\"IOS\"
\t\t\t\t\t],
\t\t\t\t\tdatasets: [{
\t\t\t\t\t\tdata: [15, 20, 30, 10, 30],
\t\t\t\t\t\tbackgroundColor: [
\t\t\t\t\t\t\t\"#BDC3C7\",
\t\t\t\t\t\t\t\"#9B59B6\",
\t\t\t\t\t\t\t\"#E74C3C\",
\t\t\t\t\t\t\t\"#26B99A\",
\t\t\t\t\t\t\t\"#3498DB\"
\t\t\t\t\t\t],
\t\t\t\t\t\thoverBackgroundColor: [
\t\t\t\t\t\t\t\"#CFD4D8\",
\t\t\t\t\t\t\t\"#B370CF\",
\t\t\t\t\t\t\t\"#E95E4F\",
\t\t\t\t\t\t\t\"#36CAAB\",
\t\t\t\t\t\t\t\"#49A9EA\"
\t\t\t\t\t\t]
\t\t\t\t\t}]
\t\t\t\t},
\t\t\t\toptions: { 
\t\t\t\t\tlegend: false, 
\t\t\t\t\tresponsive: false 
\t\t\t\t}
\t\t\t}
\t\t
\t\t\t\$('.canvasDoughnut').each(function(){
\t\t\t\t
\t\t\t\tvar chart_element = \$(this);
\t\t\t\tvar chart_doughnut = new Chart( chart_element, chart_doughnut_settings);
\t\t\t\t
\t\t\t});\t\t\t
\t\t
\t\t}  
\t   
\t}
\t   
\tfunction init_gauge() {
\t\t\t
\t\tif( typeof (Gauge) === 'undefined'){ return; }
\t\t
\t\tconsole.log('init_gauge [' + \$('.gauge-chart').length + ']');
\t\t
\t\tconsole.log('init_gauge');
\t\t

\t\t  var chart_gauge_settings = {
\t\t  lines: 12,
\t\t  angle: 0,
\t\t  lineWidth: 0.4,
\t\t  pointer: {
\t\t\t  length: 0.75,
\t\t\t  strokeWidth: 0.042,
\t\t\t  color: '#1D212A'
\t\t  },
\t\t  limitMax: 'false',
\t\t  colorStart: '#1ABC9C',
\t\t  colorStop: '#1ABC9C',
\t\t  strokeColor: '#F0F3F3',
\t\t  generateGradient: true
\t  };
\t\t
\t\t
\t\tif (\$('#chart_gauge_01').length){ 
\t\t
\t\t\tvar chart_gauge_01_elem = document.getElementById('chart_gauge_01');
\t\t\tvar chart_gauge_01 = new Gauge(chart_gauge_01_elem).setOptions(chart_gauge_settings);
\t\t\t
\t\t}\t
\t\t
\t\t
\t\tif (\$('#gauge-text').length){ 
\t\t
\t\t\tchart_gauge_01.maxValue = 6000;
\t\t\tchart_gauge_01.animationSpeed = 32;
\t\t\tchart_gauge_01.set(3200);
\t\t\tchart_gauge_01.setTextField(document.getElementById(\"gauge-text\"));
\t\t
\t\t}
\t\t
\t\tif (\$('#chart_gauge_02').length){
\t\t
\t\t\tvar chart_gauge_02_elem = document.getElementById('chart_gauge_02');
\t\t\tvar chart_gauge_02 = new Gauge(chart_gauge_02_elem).setOptions(chart_gauge_settings);
\t\t\t
\t\t}
\t\t
\t\t
\t\tif (\$('#gauge-text2').length){
\t\t\t
\t\t\tchart_gauge_02.maxValue = 9000;
\t\t\tchart_gauge_02.animationSpeed = 32;
\t\t\tchart_gauge_02.set(2400);
\t\t\tchart_gauge_02.setTextField(document.getElementById(\"gauge-text2\"));
\t\t
\t\t}
\t
\t
\t}   
\t   \t   
\t/* SPARKLINES */
\t\t\t
\t\tfunction init_sparklines() {
\t\t\t
\t\t\tif(typeof (jQuery.fn.sparkline) === 'undefined'){ return; }
\t\t\tconsole.log('init_sparklines'); 
\t\t\t
\t\t\t
\t\t\t\$(\".sparkline_one\").sparkline([2, 4, 3, 4, 5, 4, 5, 4, 3, 4, 5, 6, 4, 5, 6, 3, 5, 4, 5, 4, 5, 4, 3, 4, 5, 6, 7, 5, 4, 3, 5, 6], {
\t\t\t\ttype: 'bar',
\t\t\t\theight: '125',
\t\t\t\tbarWidth: 13,
\t\t\t\tcolorMap: {
\t\t\t\t\t'7': '#a1a1a1'
\t\t\t\t},
\t\t\t\tbarSpacing: 2,
\t\t\t\tbarColor: '#26B99A'
\t\t\t});
\t\t\t
\t\t\t
\t\t\t\$(\".sparkline_two\").sparkline([2, 4, 3, 4, 5, 4, 5, 4, 3, 4, 5, 6, 7, 5, 4, 3, 5, 6], {
\t\t\t\ttype: 'bar',
\t\t\t\theight: '40',
\t\t\t\tbarWidth: 9,
\t\t\t\tcolorMap: {
\t\t\t\t\t'7': '#a1a1a1'\t
\t\t\t\t},
\t\t\t\tbarSpacing: 2,
\t\t\t\tbarColor: '#26B99A'
\t\t\t});
\t\t\t
\t\t\t
\t\t\t\$(\".sparkline_three\").sparkline([2, 4, 3, 4, 5, 4, 5, 4, 3, 4, 5, 6, 7, 5, 4, 3, 5, 6], {
\t\t\t\ttype: 'line',
\t\t\t\twidth: '200',
\t\t\t\theight: '40',
\t\t\t\tlineColor: '#26B99A',
\t\t\t\tfillColor: 'rgba(223, 223, 223, 0.57)',
\t\t\t\tlineWidth: 2,
\t\t\t\tspotColor: '#26B99A',
\t\t\t\tminSpotColor: '#26B99A'
\t\t\t});
\t\t\t
\t\t\t
\t\t\t\$(\".sparkline11\").sparkline([2, 4, 3, 4, 5, 4, 5, 4, 3, 4, 6, 2, 4, 3, 4, 5, 4, 5, 4, 3], {
\t\t\t\ttype: 'bar',
\t\t\t\theight: '40',
\t\t\t\tbarWidth: 8,
\t\t\t\tcolorMap: {
\t\t\t\t\t'7': '#a1a1a1'
\t\t\t\t},
\t\t\t\tbarSpacing: 2,
\t\t\t\tbarColor: '#26B99A'
\t\t\t});
\t\t\t
\t\t\t
\t\t\t\$(\".sparkline22\").sparkline([2, 4, 3, 4, 7, 5, 4, 3, 5, 6, 2, 4, 3, 4, 5, 4, 5, 4, 3, 4, 6], {
\t\t\t\ttype: 'line',
\t\t\t\theight: '40',
\t\t\t\twidth: '200',
\t\t\t\tlineColor: '#26B99A',
\t\t\t\tfillColor: '#ffffff',
\t\t\t\tlineWidth: 3,
\t\t\t\tspotColor: '#34495E',
\t\t\t\tminSpotColor: '#34495E'
\t\t\t});
\t
\t
\t\t\t\$(\".sparkline_bar\").sparkline([2, 4, 3, 4, 5, 4, 5, 4, 3, 4, 5, 6, 4, 5, 6, 3, 5], {
\t\t\t\ttype: 'bar',
\t\t\t\tcolorMap: {
\t\t\t\t\t'7': '#a1a1a1'
\t\t\t\t},
\t\t\t\tbarColor: '#26B99A'
\t\t\t});
\t\t\t
\t\t\t
\t\t\t\$(\".sparkline_area\").sparkline([5, 6, 7, 9, 9, 5, 3, 2, 2, 4, 6, 7], {
\t\t\t\ttype: 'line',
\t\t\t\tlineColor: '#26B99A',
\t\t\t\tfillColor: '#26B99A',
\t\t\t\tspotColor: '#4578a0',
\t\t\t\tminSpotColor: '#728fb2',
\t\t\t\tmaxSpotColor: '#6d93c4',
\t\t\t\thighlightSpotColor: '#ef5179',
\t\t\t\thighlightLineColor: '#8ba8bf',
\t\t\t\tspotRadius: 2.5,
\t\t\t\twidth: 85
\t\t\t});
\t\t\t
\t\t\t
\t\t\t\$(\".sparkline_line\").sparkline([2, 4, 3, 4, 5, 4, 5, 4, 3, 4, 5, 6, 4, 5, 6, 3, 5], {
\t\t\t\ttype: 'line',
\t\t\t\tlineColor: '#26B99A',
\t\t\t\tfillColor: '#ffffff',
\t\t\t\twidth: 85,
\t\t\t\tspotColor: '#34495E',
\t\t\t\tminSpotColor: '#34495E'
\t\t\t});
\t\t\t
\t\t\t
\t\t\t\$(\".sparkline_pie\").sparkline([1, 1, 2, 1], {
\t\t\t\ttype: 'pie',
\t\t\t\tsliceColors: ['#26B99A', '#ccc', '#75BCDD', '#D66DE2']
\t\t\t});
\t\t\t
\t\t\t
\t\t\t\$(\".sparkline_discreet\").sparkline([4, 6, 7, 7, 4, 3, 2, 1, 4, 4, 2, 4, 3, 7, 8, 9, 7, 6, 4, 3], {
\t\t\t\ttype: 'discrete',
\t\t\t\tbarWidth: 3,
\t\t\t\tlineColor: '#26B99A',
\t\t\t\twidth: '85',
\t\t\t});

\t\t\t
\t\t};   
\t   
\t   
\t   /* AUTOCOMPLETE */
\t\t\t
\t\tfunction init_autocomplete() {
\t\t\t
\t\t\tif( typeof (autocomplete) === 'undefined'){ return; }
\t\t\tconsole.log('init_autocomplete');
\t\t\t
\t\t\tvar countries = { AD:\"Andorra\",A2:\"Andorra Test\",AE:\"United Arab Emirates\",AF:\"Afghanistan\",AG:\"Antigua and Barbuda\",AI:\"Anguilla\",AL:\"Albania\",AM:\"Armenia\",AN:\"Netherlands Antilles\",AO:\"Angola\",AQ:\"Antarctica\",AR:\"Argentina\",AS:\"American Samoa\",AT:\"Austria\",AU:\"Australia\",AW:\"Aruba\",AX:\"Åland Islands\",AZ:\"Azerbaijan\",BA:\"Bosnia and Herzegovina\",BB:\"Barbados\",BD:\"Bangladesh\",BE:\"Belgium\",BF:\"Burkina Faso\",BG:\"Bulgaria\",BH:\"Bahrain\",BI:\"Burundi\",BJ:\"Benin\",BL:\"Saint Barthélemy\",BM:\"Bermuda\",BN:\"Brunei\",BO:\"Bolivia\",BQ:\"British Antarctic Territory\",BR:\"Brazil\",BS:\"Bahamas\",BT:\"Bhutan\",BV:\"Bouvet Island\",BW:\"Botswana\",BY:\"Belarus\",BZ:\"Belize\",CA:\"Canada\",CC:\"Cocos [Keeling] Islands\",CD:\"Congo - Kinshasa\",CF:\"Central African Republic\",CG:\"Congo - Brazzaville\",CH:\"Switzerland\",CI:\"Côte d’Ivoire\",CK:\"Cook Islands\",CL:\"Chile\",CM:\"Cameroon\",CN:\"China\",CO:\"Colombia\",CR:\"Costa Rica\",CS:\"Serbia and Montenegro\",CT:\"Canton and Enderbury Islands\",CU:\"Cuba\",CV:\"Cape Verde\",CX:\"Christmas Island\",CY:\"Cyprus\",CZ:\"Czech Republic\",DD:\"East Germany\",DE:\"Germany\",DJ:\"Djibouti\",DK:\"Denmark\",DM:\"Dominica\",DO:\"Dominican Republic\",DZ:\"Algeria\",EC:\"Ecuador\",EE:\"Estonia\",EG:\"Egypt\",EH:\"Western Sahara\",ER:\"Eritrea\",ES:\"Spain\",ET:\"Ethiopia\",FI:\"Finland\",FJ:\"Fiji\",FK:\"Falkland Islands\",FM:\"Micronesia\",FO:\"Faroe Islands\",FQ:\"French Southern and Antarctic Territories\",FR:\"France\",FX:\"Metropolitan France\",GA:\"Gabon\",GB:\"United Kingdom\",GD:\"Grenada\",GE:\"Georgia\",GF:\"French Guiana\",GG:\"Guernsey\",GH:\"Ghana\",GI:\"Gibraltar\",GL:\"Greenland\",GM:\"Gambia\",GN:\"Guinea\",GP:\"Guadeloupe\",GQ:\"Equatorial Guinea\",GR:\"Greece\",GS:\"South Georgia and the South Sandwich Islands\",GT:\"Guatemala\",GU:\"Guam\",GW:\"Guinea-Bissau\",GY:\"Guyana\",HK:\"Hong Kong SAR China\",HM:\"Heard Island and McDonald Islands\",HN:\"Honduras\",HR:\"Croatia\",HT:\"Haiti\",HU:\"Hungary\",ID:\"Indonesia\",IE:\"Ireland\",IL:\"Israel\",IM:\"Isle of Man\",IN:\"India\",IO:\"British Indian Ocean Territory\",IQ:\"Iraq\",IR:\"Iran\",IS:\"Iceland\",IT:\"Italy\",JE:\"Jersey\",JM:\"Jamaica\",JO:\"Jordan\",JP:\"Japan\",JT:\"Johnston Island\",KE:\"Kenya\",KG:\"Kyrgyzstan\",KH:\"Cambodia\",KI:\"Kiribati\",KM:\"Comoros\",KN:\"Saint Kitts and Nevis\",KP:\"North Korea\",KR:\"South Korea\",KW:\"Kuwait\",KY:\"Cayman Islands\",KZ:\"Kazakhstan\",LA:\"Laos\",LB:\"Lebanon\",LC:\"Saint Lucia\",LI:\"Liechtenstein\",LK:\"Sri Lanka\",LR:\"Liberia\",LS:\"Lesotho\",LT:\"Lithuania\",LU:\"Luxembourg\",LV:\"Latvia\",LY:\"Libya\",MA:\"Morocco\",MC:\"Monaco\",MD:\"Moldova\",ME:\"Montenegro\",MF:\"Saint Martin\",MG:\"Madagascar\",MH:\"Marshall Islands\",MI:\"Midway Islands\",MK:\"Macedonia\",ML:\"Mali\",MM:\"Myanmar [Burma]\",MN:\"Mongolia\",MO:\"Macau SAR China\",MP:\"Northern Mariana Islands\",MQ:\"Martinique\",MR:\"Mauritania\",MS:\"Montserrat\",MT:\"Malta\",MU:\"Mauritius\",MV:\"Maldives\",MW:\"Malawi\",MX:\"Mexico\",MY:\"Malaysia\",MZ:\"Mozambique\",NA:\"Namibia\",NC:\"New Caledonia\",NE:\"Niger\",NF:\"Norfolk Island\",NG:\"Nigeria\",NI:\"Nicaragua\",NL:\"Netherlands\",NO:\"Norway\",NP:\"Nepal\",NQ:\"Dronning Maud Land\",NR:\"Nauru\",NT:\"Neutral Zone\",NU:\"Niue\",NZ:\"New Zealand\",OM:\"Oman\",PA:\"Panama\",PC:\"Pacific Islands Trust Territory\",PE:\"Peru\",PF:\"French Polynesia\",PG:\"Papua New Guinea\",PH:\"Philippines\",PK:\"Pakistan\",PL:\"Poland\",PM:\"Saint Pierre and Miquelon\",PN:\"Pitcairn Islands\",PR:\"Puerto Rico\",PS:\"Palestinian Territories\",PT:\"Portugal\",PU:\"U.S. Miscellaneous Pacific Islands\",PW:\"Palau\",PY:\"Paraguay\",PZ:\"Panama Canal Zone\",QA:\"Qatar\",RE:\"Réunion\",RO:\"Romania\",RS:\"Serbia\",RU:\"Russia\",RW:\"Rwanda\",SA:\"Saudi Arabia\",SB:\"Solomon Islands\",SC:\"Seychelles\",SD:\"Sudan\",SE:\"Sweden\",SG:\"Singapore\",SH:\"Saint Helena\",SI:\"Slovenia\",SJ:\"Svalbard and Jan Mayen\",SK:\"Slovakia\",SL:\"Sierra Leone\",SM:\"San Marino\",SN:\"Senegal\",SO:\"Somalia\",SR:\"Suriname\",ST:\"São Tomé and Príncipe\",SU:\"Union of Soviet Socialist Republics\",SV:\"El Salvador\",SY:\"Syria\",SZ:\"Swaziland\",TC:\"Turks and Caicos Islands\",TD:\"Chad\",TF:\"French Southern Territories\",TG:\"Togo\",TH:\"Thailand\",TJ:\"Tajikistan\",TK:\"Tokelau\",TL:\"Timor-Leste\",TM:\"Turkmenistan\",TN:\"Tunisia\",TO:\"Tonga\",TR:\"Turkey\",TT:\"Trinidad and Tobago\",TV:\"Tuvalu\",TW:\"Taiwan\",TZ:\"Tanzania\",UA:\"Ukraine\",UG:\"Uganda\",UM:\"U.S. Minor Outlying Islands\",US:\"United States\",UY:\"Uruguay\",UZ:\"Uzbekistan\",VA:\"Vatican City\",VC:\"Saint Vincent and the Grenadines\",VD:\"North Vietnam\",VE:\"Venezuela\",VG:\"British Virgin Islands\",VI:\"U.S. Virgin Islands\",VN:\"Vietnam\",VU:\"Vanuatu\",WF:\"Wallis and Futuna\",WK:\"Wake Island\",WS:\"Samoa\",YD:\"People's Democratic Republic of Yemen\",YE:\"Yemen\",YT:\"Mayotte\",ZA:\"South Africa\",ZM:\"Zambia\",ZW:\"Zimbabwe\",ZZ:\"Unknown or Invalid Region\" };

\t\t\tvar countriesArray = \$.map(countries, function(value, key) {
\t\t\t  return {
\t\t\t\tvalue: value,
\t\t\t\tdata: key
\t\t\t  };
\t\t\t});

\t\t\t// initialize autocomplete with custom appendTo
\t\t\t\$('#autocomplete-custom-append').autocomplete({
\t\t\t  lookup: countriesArray
\t\t\t});
\t\t\t
\t\t};
\t   
\t /* AUTOSIZE */
\t\t\t
\t\tfunction init_autosize() {
\t\t\t
\t\t\tif(typeof \$.fn.autosize !== 'undefined'){
\t\t\t
\t\t\tautosize(\$('.resizable_textarea'));
\t\t\t
\t\t\t}
\t\t\t
\t\t};  
\t   
\t   /* PARSLEY */
\t\t\t
\t\tfunction init_parsley() {
\t\t\t
\t\t\tif( typeof (parsley) === 'undefined'){ return; }
\t\t\tconsole.log('init_parsley');
\t\t\t
\t\t\t\$/*.listen*/('parsley:field:validate', function() {
\t\t\t  validateFront();
\t\t\t});
\t\t\t\$('#demo-form .btn').on('click', function() {
\t\t\t  \$('#demo-form').parsley().validate();
\t\t\t  validateFront();
\t\t\t});
\t\t\tvar validateFront = function() {
\t\t\t  if (true === \$('#demo-form').parsley().isValid()) {
\t\t\t\t\$('.bs-callout-info').removeClass('hidden');
\t\t\t\t\$('.bs-callout-warning').addClass('hidden');
\t\t\t  } else {
\t\t\t\t\$('.bs-callout-info').addClass('hidden');
\t\t\t\t\$('.bs-callout-warning').removeClass('hidden');
\t\t\t  }
\t\t\t};
\t\t  
\t\t\t\$/*.listen*/('parsley:field:validate', function() {
\t\t\t  validateFront();
\t\t\t});
\t\t\t\$('#demo-form2 .btn').on('click', function() {
\t\t\t  \$('#demo-form2').parsley().validate();
\t\t\t  validateFront();
\t\t\t});
\t\t\tvar validateFront = function() {
\t\t\t  if (true === \$('#demo-form2').parsley().isValid()) {
\t\t\t\t\$('.bs-callout-info').removeClass('hidden');
\t\t\t\t\$('.bs-callout-warning').addClass('hidden');
\t\t\t  } else {
\t\t\t\t\$('.bs-callout-info').addClass('hidden');
\t\t\t\t\$('.bs-callout-warning').removeClass('hidden');
\t\t\t  }
\t\t\t};
\t\t\t
\t\t\t  try {
\t\t\t\thljs.initHighlightingOnLoad();
\t\t\t  } catch (err) {}
\t\t\t
\t\t};
\t   
\t\t
\t\t  /* INPUTS */
\t\t  
\t\t\tfunction onAddTag(tag) {
\t\t\t\talert(\"Added a tag: \" + tag);
\t\t\t  }

\t\t\t  function onRemoveTag(tag) {
\t\t\t\talert(\"Removed a tag: \" + tag);
\t\t\t  }

\t\t\t  function onChangeTag(input, tag) {
\t\t\t\talert(\"Changed a tag: \" + tag);
\t\t\t  }

\t\t\t  //tags input
\t\t\tfunction init_TagsInput() {
\t\t\t\t  
\t\t\t\tif(typeof \$.fn.tagsInput !== 'undefined'){\t
\t\t\t\t 
\t\t\t\t\$('#tags_1').tagsInput({
\t\t\t\t  width: 'auto'
\t\t\t\t});
\t\t\t\t
\t\t\t\t}
\t\t\t\t
\t\t    };
\t   
\t\t/* SELECT2 */
\t  
\t\tfunction init_select2() {
\t\t\t 
\t\t\tif( typeof (select2) === 'undefined'){ return; }
\t\t\tconsole.log('init_toolbox');
\t\t\t 
\t\t\t\$(\".select2_single\").select2({
\t\t\t  placeholder: \"Select a state\",
\t\t\t  allowClear: true
\t\t\t});
\t\t\t\$(\".select2_group\").select2({});
\t\t\t\$(\".select2_multiple\").select2({
\t\t\t  maximumSelectionLength: 4,
\t\t\t  placeholder: \"With Max Selection limit 4\",
\t\t\t  allowClear: true
\t\t\t});
\t\t\t
\t\t};
\t   
\t   /* WYSIWYG EDITOR */

\t\tfunction init_wysiwyg() {
\t\t\t
\t\tif( typeof (\$.fn.wysiwyg) === 'undefined'){ return; }
\t\tconsole.log('init_wysiwyg');\t
\t\t\t
        function init_ToolbarBootstrapBindings() {
          var fonts = ['Serif', 'Sans', 'Arial', 'Arial Black', 'Courier',
              'Courier New', 'Comic Sans MS', 'Helvetica', 'Impact', 'Lucida Grande', 'Lucida Sans', 'Tahoma', 'Times',
              'Times New Roman', 'Verdana'
            ],
            fontTarget = \$('[title=Font]').siblings('.dropdown-menu');
          \$.each(fonts, function(idx, fontName) {
            fontTarget.append(\$('<li><a data-edit=\"fontName ' + fontName + '\" style=\"font-family:\\'' + fontName + '\\'\">' + fontName + '</a></li>'));
          });
          \$('a[title]').tooltip({
            container: 'body'
          });
          \$('.dropdown-menu input').click(function() {
              return false;
            })
            .change(function() {
              \$(this).parent('.dropdown-menu').siblings('.dropdown-toggle').dropdown('toggle');
            })
            .keydown('esc', function() {
              this.value = '';
              \$(this).change();
            });

          \$('[data-role=magic-overlay]').each(function() {
            var overlay = \$(this),
              target = \$(overlay.data('target'));
            overlay.css('opacity', 0).css('position', 'absolute').offset(target.offset()).width(target.outerWidth()).height(target.outerHeight());
          });

          if (\"onwebkitspeechchange\" in document.createElement(\"input\")) {
            var editorOffset = \$('#editor').offset();

            \$('.voiceBtn').css('position', 'absolute').offset({
              top: editorOffset.top,
              left: editorOffset.left + \$('#editor').innerWidth() - 35
            });
          } else {
            \$('.voiceBtn').hide();
          }
        }

        function showErrorAlert(reason, detail) {
          var msg = '';
          if (reason === 'unsupported-file-type') {
            msg = \"Unsupported format \" + detail;
          } else {
            console.log(\"error uploading file\", reason, detail);
          }
          \$('<div class=\"alert\"> <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>' +
            '<strong>File upload error</strong> ' + msg + ' </div>').prependTo('#alerts');
        }

       \$('.editor-wrapper').each(function(){
\t\t\tvar id = \$(this).attr('id');\t//editor-one
\t\t\t
\t\t\t\$(this).wysiwyg({
\t\t\t\ttoolbarSelector: '[data-target=\"#' + id + '\"]',
\t\t\t\tfileUploadError: showErrorAlert
\t\t\t});\t
\t\t});
 
\t\t
        window.prettyPrint;
        prettyPrint();
\t
    };
\t  
\t/* CROPPER */
\t\t
\t\tfunction init_cropper() {
\t\t\t
\t\t\t
\t\t\tif( typeof (\$.fn.cropper) === 'undefined'){ return; }
\t\t\tconsole.log('init_cropper');
\t\t\t
\t\t\tvar \$image = \$('#image');
\t\t\tvar \$download = \$('#download');
\t\t\tvar \$dataX = \$('#dataX');
\t\t\tvar \$dataY = \$('#dataY');
\t\t\tvar \$dataHeight = \$('#dataHeight');
\t\t\tvar \$dataWidth = \$('#dataWidth');
\t\t\tvar \$dataRotate = \$('#dataRotate');
\t\t\tvar \$dataScaleX = \$('#dataScaleX');
\t\t\tvar \$dataScaleY = \$('#dataScaleY');
\t\t\tvar options = {
\t\t\t\t  aspectRatio: 16 / 9,
\t\t\t\t  preview: '.img-preview',
\t\t\t\t  crop: function (e) {
\t\t\t\t\t\$dataX.val(Math.round(e.x));
\t\t\t\t\t\$dataY.val(Math.round(e.y));
\t\t\t\t\t\$dataHeight.val(Math.round(e.height));
\t\t\t\t\t\$dataWidth.val(Math.round(e.width));
\t\t\t\t\t\$dataRotate.val(e.rotate);
\t\t\t\t\t\$dataScaleX.val(e.scaleX);
\t\t\t\t\t\$dataScaleY.val(e.scaleY);
\t\t\t\t  }
\t\t\t\t};


\t\t\t// Tooltip
\t\t\t\$('[data-toggle=\"tooltip\"]').tooltip();


\t\t\t// Cropper
\t\t\t\$image.on({
\t\t\t  'build.cropper': function (e) {
\t\t\t\tconsole.log(e.type);
\t\t\t  },
\t\t\t  'built.cropper': function (e) {
\t\t\t\tconsole.log(e.type);
\t\t\t  },
\t\t\t  'cropstart.cropper': function (e) {
\t\t\t\tconsole.log(e.type, e.action);
\t\t\t  },
\t\t\t  'cropmove.cropper': function (e) {
\t\t\t\tconsole.log(e.type, e.action);
\t\t\t  },
\t\t\t  'cropend.cropper': function (e) {
\t\t\t\tconsole.log(e.type, e.action);
\t\t\t  },
\t\t\t  'crop.cropper': function (e) {
\t\t\t\tconsole.log(e.type, e.x, e.y, e.width, e.height, e.rotate, e.scaleX, e.scaleY);
\t\t\t  },
\t\t\t  'zoom.cropper': function (e) {
\t\t\t\tconsole.log(e.type, e.ratio);
\t\t\t  }
\t\t\t}).cropper(options);


\t\t\t// Buttons
\t\t\tif (!\$.isFunction(document.createElement('canvas').getContext)) {
\t\t\t  \$('button[data-method=\"getCroppedCanvas\"]').prop('disabled', true);
\t\t\t}

\t\t\tif (typeof document.createElement('cropper').style.transition === 'undefined') {
\t\t\t  \$('button[data-method=\"rotate\"]').prop('disabled', true);
\t\t\t  \$('button[data-method=\"scale\"]').prop('disabled', true);
\t\t\t}


\t\t\t// Download
\t\t\tif (typeof \$download[0].download === 'undefined') {
\t\t\t  \$download.addClass('disabled');
\t\t\t}


\t\t\t// Options
\t\t\t\$('.docs-toggles').on('change', 'input', function () {
\t\t\t  var \$this = \$(this);
\t\t\t  var name = \$this.attr('name');
\t\t\t  var type = \$this.prop('type');
\t\t\t  var cropBoxData;
\t\t\t  var canvasData;

\t\t\t  if (!\$image.data('cropper')) {
\t\t\t\treturn;
\t\t\t  }

\t\t\t  if (type === 'checkbox') {
\t\t\t\toptions[name] = \$this.prop('checked');
\t\t\t\tcropBoxData = \$image.cropper('getCropBoxData');
\t\t\t\tcanvasData = \$image.cropper('getCanvasData');

\t\t\t\toptions.built = function () {
\t\t\t\t  \$image.cropper('setCropBoxData', cropBoxData);
\t\t\t\t  \$image.cropper('setCanvasData', canvasData);
\t\t\t\t};
\t\t\t  } else if (type === 'radio') {
\t\t\t\toptions[name] = \$this.val();
\t\t\t  }

\t\t\t  \$image.cropper('destroy').cropper(options);
\t\t\t});


\t\t\t// Methods
\t\t\t\$('.docs-buttons').on('click', '[data-method]', function () {
\t\t\t  var \$this = \$(this);
\t\t\t  var data = \$this.data();
\t\t\t  var \$target;
\t\t\t  var result;

\t\t\t  if (\$this.prop('disabled') || \$this.hasClass('disabled')) {
\t\t\t\treturn;
\t\t\t  }

\t\t\t  if (\$image.data('cropper') && data.method) {
\t\t\t\tdata = \$.extend({}, data); // Clone a new one

\t\t\t\tif (typeof data.target !== 'undefined') {
\t\t\t\t  \$target = \$(data.target);

\t\t\t\t  if (typeof data.option === 'undefined') {
\t\t\t\t\ttry {
\t\t\t\t\t  data.option = JSON.parse(\$target.val());
\t\t\t\t\t} catch (e) {
\t\t\t\t\t  console.log(e.message);
\t\t\t\t\t}
\t\t\t\t  }
\t\t\t\t}

\t\t\t\tresult = \$image.cropper(data.method, data.option, data.secondOption);

\t\t\t\tswitch (data.method) {
\t\t\t\t  case 'scaleX':
\t\t\t\t  case 'scaleY':
\t\t\t\t\t\$(this).data('option', -data.option);
\t\t\t\t\tbreak;

\t\t\t\t  case 'getCroppedCanvas':
\t\t\t\t\tif (result) {

\t\t\t\t\t  // Bootstrap's Modal
\t\t\t\t\t  \$('#getCroppedCanvasModal').modal().find('.modal-body').html(result);

\t\t\t\t\t  if (!\$download.hasClass('disabled')) {
\t\t\t\t\t\t\$download.attr('href', result.toDataURL());
\t\t\t\t\t  }
\t\t\t\t\t}

\t\t\t\t\tbreak;
\t\t\t\t}

\t\t\t\tif (\$.isPlainObject(result) && \$target) {
\t\t\t\t  try {
\t\t\t\t\t\$target.val(JSON.stringify(result));
\t\t\t\t  } catch (e) {
\t\t\t\t\tconsole.log(e.message);
\t\t\t\t  }
\t\t\t\t}

\t\t\t  }
\t\t\t});

\t\t\t// Keyboard
\t\t\t\$(document.body).on('keydown', function (e) {
\t\t\t  if (!\$image.data('cropper') || this.scrollTop > 300) {
\t\t\t\treturn;
\t\t\t  }

\t\t\t  switch (e.which) {
\t\t\t\tcase 37:
\t\t\t\t  e.preventDefault();
\t\t\t\t  \$image.cropper('move', -1, 0);
\t\t\t\t  break;

\t\t\t\tcase 38:
\t\t\t\t  e.preventDefault();
\t\t\t\t  \$image.cropper('move', 0, -1);
\t\t\t\t  break;

\t\t\t\tcase 39:
\t\t\t\t  e.preventDefault();
\t\t\t\t  \$image.cropper('move', 1, 0);
\t\t\t\t  break;

\t\t\t\tcase 40:
\t\t\t\t  e.preventDefault();
\t\t\t\t  \$image.cropper('move', 0, 1);
\t\t\t\t  break;
\t\t\t  }
\t\t\t});

\t\t\t// Import image
\t\t\tvar \$inputImage = \$('#inputImage');
\t\t\tvar URL = window.URL || window.webkitURL;
\t\t\tvar blobURL;

\t\t\tif (URL) {
\t\t\t  \$inputImage.change(function () {
\t\t\t\tvar files = this.files;
\t\t\t\tvar file;

\t\t\t\tif (!\$image.data('cropper')) {
\t\t\t\t  return;
\t\t\t\t}

\t\t\t\tif (files && files.length) {
\t\t\t\t  file = files[0];

\t\t\t\t  if (/^image\\/\\w+\$/.test(file.type)) {
\t\t\t\t\tblobURL = URL.createObjectURL(file);
\t\t\t\t\t\$image.one('built.cropper', function () {

\t\t\t\t\t  // Revoke when load complete
\t\t\t\t\t  URL.revokeObjectURL(blobURL);
\t\t\t\t\t}).cropper('reset').cropper('replace', blobURL);
\t\t\t\t\t\$inputImage.val('');
\t\t\t\t  } else {
\t\t\t\t\twindow.alert('Please choose an image file.');
\t\t\t\t  }
\t\t\t\t}
\t\t\t  });
\t\t\t} else {
\t\t\t  \$inputImage.prop('disabled', true).parent().addClass('disabled');
\t\t\t}
\t\t\t
\t\t\t
\t\t};
\t\t
\t\t/* CROPPER --- end */  
\t  
\t\t/* KNOB */
\t  
\t\tfunction init_knob() {
\t\t
\t\t\t\tif( typeof (\$.fn.knob) === 'undefined'){ return; }
\t\t\t\tconsole.log('init_knob');
\t
\t\t\t\t\$(\".knob\").knob({
\t\t\t\t  change: function(value) {
\t\t\t\t\t//console.log(\"change : \" + value);
\t\t\t\t  },
\t\t\t\t  release: function(value) {
\t\t\t\t\t//console.log(this.\$.attr('value'));
\t\t\t\t\tconsole.log(\"release : \" + value);
\t\t\t\t  },
\t\t\t\t  cancel: function() {
\t\t\t\t\tconsole.log(\"cancel : \", this);
\t\t\t\t  },
\t\t\t\t  /*format : function (value) {
\t\t\t\t   return value + '%';
\t\t\t\t   },*/
\t\t\t\t  draw: function() {

\t\t\t\t\t// \"tron\" case
\t\t\t\t\tif (this.\$.data('skin') == 'tron') {

\t\t\t\t\t  this.cursorExt = 0.3;

\t\t\t\t\t  var a = this.arc(this.cv) // Arc
\t\t\t\t\t\t,
\t\t\t\t\t\tpa // Previous arc
\t\t\t\t\t\t, r = 1;

\t\t\t\t\t  this.g.lineWidth = this.lineWidth;

\t\t\t\t\t  if (this.o.displayPrevious) {
\t\t\t\t\t\tpa = this.arc(this.v);
\t\t\t\t\t\tthis.g.beginPath();
\t\t\t\t\t\tthis.g.strokeStyle = this.pColor;
\t\t\t\t\t\tthis.g.arc(this.xy, this.xy, this.radius - this.lineWidth, pa.s, pa.e, pa.d);
\t\t\t\t\t\tthis.g.stroke();
\t\t\t\t\t  }

\t\t\t\t\t  this.g.beginPath();
\t\t\t\t\t  this.g.strokeStyle = r ? this.o.fgColor : this.fgColor;
\t\t\t\t\t  this.g.arc(this.xy, this.xy, this.radius - this.lineWidth, a.s, a.e, a.d);
\t\t\t\t\t  this.g.stroke();

\t\t\t\t\t  this.g.lineWidth = 2;
\t\t\t\t\t  this.g.beginPath();
\t\t\t\t\t  this.g.strokeStyle = this.o.fgColor;
\t\t\t\t\t  this.g.arc(this.xy, this.xy, this.radius - this.lineWidth + 1 + this.lineWidth * 2 / 3, 0, 2 * Math.PI, false);
\t\t\t\t\t  this.g.stroke();

\t\t\t\t\t  return false;
\t\t\t\t\t}
\t\t\t\t  }
\t\t\t\t  
\t\t\t\t});

\t\t\t\t// Example of infinite knob, iPod click wheel
\t\t\t\tvar v, up = 0,
\t\t\t\t  down = 0,
\t\t\t\t  i = 0,
\t\t\t\t  \$idir = \$(\"div.idir\"),
\t\t\t\t  \$ival = \$(\"div.ival\"),
\t\t\t\t  incr = function() {
\t\t\t\t\ti++;
\t\t\t\t\t\$idir.show().html(\"+\").fadeOut();
\t\t\t\t\t\$ival.html(i);
\t\t\t\t  },
\t\t\t\t  decr = function() {
\t\t\t\t\ti--;
\t\t\t\t\t\$idir.show().html(\"-\").fadeOut();
\t\t\t\t\t\$ival.html(i);
\t\t\t\t  };
\t\t\t\t\$(\"input.infinite\").knob({
\t\t\t\t  min: 0,
\t\t\t\t  max: 20,
\t\t\t\t  stopper: false,
\t\t\t\t  change: function() {
\t\t\t\t\tif (v > this.cv) {
\t\t\t\t\t  if (up) {
\t\t\t\t\t\tdecr();
\t\t\t\t\t\tup = 0;
\t\t\t\t\t  } else {
\t\t\t\t\t\tup = 1;
\t\t\t\t\t\tdown = 0;
\t\t\t\t\t  }
\t\t\t\t\t} else {
\t\t\t\t\t  if (v < this.cv) {
\t\t\t\t\t\tif (down) {
\t\t\t\t\t\t  incr();
\t\t\t\t\t\t  down = 0;
\t\t\t\t\t\t} else {
\t\t\t\t\t\t  down = 1;
\t\t\t\t\t\t  up = 0;
\t\t\t\t\t\t}
\t\t\t\t\t  }
\t\t\t\t\t}
\t\t\t\t\tv = this.cv;
\t\t\t\t  }
\t\t\t\t});
\t\t\t\t
\t\t};
\t 
\t\t/* INPUT MASK */
\t\t\t
\t\tfunction init_InputMask() {
\t\t\t
\t\t\tif( typeof (\$.fn.inputmask) === 'undefined'){ return; }
\t\t\tconsole.log('init_InputMask');
\t\t\t
\t\t\t\t\$(\":input\").inputmask();
\t\t\t\t
\t\t};
\t  
\t\t/* COLOR PICKER */
\t\t\t 
\t\tfunction init_ColorPicker() {
\t\t\t
\t\t\tif( typeof (\$.fn.colorpicker) === 'undefined'){ return; }
\t\t\tconsole.log('init_ColorPicker');
\t\t\t
\t\t\t\t\$('.demo1').colorpicker();
\t\t\t\t\$('.demo2').colorpicker();

\t\t\t\t\$('#demo_forceformat').colorpicker({
\t\t\t\t\tformat: 'rgba',
\t\t\t\t\thorizontal: true
\t\t\t\t});

\t\t\t\t\$('#demo_forceformat3').colorpicker({
\t\t\t\t\tformat: 'rgba',
\t\t\t\t});

\t\t\t\t\$('.demo-auto').colorpicker();
\t\t\t
\t\t}; 
\t   
\t   
\t\t/* ION RANGE SLIDER */
\t\t\t
\t\tfunction init_IonRangeSlider() {
\t\t\t
\t\t\tif( typeof (\$.fn.ionRangeSlider) === 'undefined'){ return; }
\t\t\tconsole.log('init_IonRangeSlider');
\t\t\t
\t\t\t\$(\"#range_27\").ionRangeSlider({
\t\t\t  type: \"double\",
\t\t\t  min: 1000000,
\t\t\t  max: 2000000,
\t\t\t  grid: true,
\t\t\t  force_edges: true
\t\t\t});
\t\t\t\$(\"#range\").ionRangeSlider({
\t\t\t  hide_min_max: true,
\t\t\t  keyboard: true,
\t\t\t  min: 0,
\t\t\t  max: 5000,
\t\t\t  from: 1000,
\t\t\t  to: 4000,
\t\t\t  type: 'double',
\t\t\t  step: 1,
\t\t\t  prefix: \"\$\",
\t\t\t  grid: true
\t\t\t});
\t\t\t\$(\"#range_25\").ionRangeSlider({
\t\t\t  type: \"double\",
\t\t\t  min: 1000000,
\t\t\t  max: 2000000,
\t\t\t  grid: true
\t\t\t});
\t\t\t\$(\"#range_26\").ionRangeSlider({
\t\t\t  type: \"double\",
\t\t\t  min: 0,
\t\t\t  max: 10000,
\t\t\t  step: 500,
\t\t\t  grid: true,
\t\t\t  grid_snap: true
\t\t\t});
\t\t\t\$(\"#range_31\").ionRangeSlider({
\t\t\t  type: \"double\",
\t\t\t  min: 0,
\t\t\t  max: 100,
\t\t\t  from: 30,
\t\t\t  to: 70,
\t\t\t  from_fixed: true
\t\t\t});
\t\t\t\$(\".range_min_max\").ionRangeSlider({
\t\t\t  type: \"double\",
\t\t\t  min: 0,
\t\t\t  max: 100,
\t\t\t  from: 30,
\t\t\t  to: 70,
\t\t\t  max_interval: 50
\t\t\t});
\t\t\t\$(\".range_time24\").ionRangeSlider({
\t\t\t  min: +moment().subtract(12, \"hours\").format(\"X\"),
\t\t\t  max: +moment().format(\"X\"),
\t\t\t  from: +moment().subtract(6, \"hours\").format(\"X\"),
\t\t\t  grid: true,
\t\t\t  force_edges: true,
\t\t\t  prettify: function(num) {
\t\t\t\tvar m = moment(num, \"X\");
\t\t\t\treturn m.format(\"Do MMMM, HH:mm\");
\t\t\t  }
\t\t\t});
\t\t\t
\t\t};
\t   
\t   
\t   /* DATERANGEPICKER */
\t   
\t\tfunction init_daterangepicker() {

\t\t\tif( typeof (\$.fn.daterangepicker) === 'undefined'){ return; }
\t\t\tconsole.log('init_daterangepicker');
\t\t
\t\t\tvar cb = function(start, end, label) {
\t\t\t  console.log(start.toISOString(), end.toISOString(), label);
\t\t\t  \$('#reportrange span').html(start.format('MMMM D, YYYY') + ' - ' + end.format('MMMM D, YYYY'));
\t\t\t};

\t\t\tvar optionSet1 = {
\t\t\t  startDate: moment().subtract(29, 'days'),
\t\t\t  endDate: moment(),
\t\t\t  minDate: '01/01/2012',
\t\t\t  maxDate: '12/31/2015',
\t\t\t  dateLimit: {
\t\t\t\tdays: 60
\t\t\t  },
\t\t\t  showDropdowns: true,
\t\t\t  showWeekNumbers: true,
\t\t\t  timePicker: false,
\t\t\t  timePickerIncrement: 1,
\t\t\t  timePicker12Hour: true,
\t\t\t  ranges: {
\t\t\t\t'Today': [moment(), moment()],
\t\t\t\t'Yesterday': [moment().subtract(1, 'days'), moment().subtract(1, 'days')],
\t\t\t\t'Last 7 Days': [moment().subtract(6, 'days'), moment()],
\t\t\t\t'Last 30 Days': [moment().subtract(29, 'days'), moment()],
\t\t\t\t'This Month': [moment().startOf('month'), moment().endOf('month')],
\t\t\t\t'Last Month': [moment().subtract(1, 'month').startOf('month'), moment().subtract(1, 'month').endOf('month')]
\t\t\t  },
\t\t\t  opens: 'left',
\t\t\t  buttonClasses: ['btn btn-default'],
\t\t\t  applyClass: 'btn-small btn-primary',
\t\t\t  cancelClass: 'btn-small',
\t\t\t  format: 'MM/DD/YYYY',
\t\t\t  separator: ' to ',
\t\t\t  locale: {
\t\t\t\tapplyLabel: 'Submit',
\t\t\t\tcancelLabel: 'Clear',
\t\t\t\tfromLabel: 'From',
\t\t\t\ttoLabel: 'To',
\t\t\t\tcustomRangeLabel: 'Custom',
\t\t\t\tdaysOfWeek: ['Su', 'Mo', 'Tu', 'We', 'Th', 'Fr', 'Sa'],
\t\t\t\tmonthNames: ['January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December'],
\t\t\t\tfirstDay: 1
\t\t\t  }
\t\t\t};
\t\t\t
\t\t\t\$('#reportrange span').html(moment().subtract(29, 'days').format('MMMM D, YYYY') + ' - ' + moment().format('MMMM D, YYYY'));
\t\t\t\$('#reportrange').daterangepicker(optionSet1, cb);
\t\t\t\$('#reportrange').on('show.daterangepicker', function() {
\t\t\t  console.log(\"show event fired\");
\t\t\t});
\t\t\t\$('#reportrange').on('hide.daterangepicker', function() {
\t\t\t  console.log(\"hide event fired\");
\t\t\t});
\t\t\t\$('#reportrange').on('apply.daterangepicker', function(ev, picker) {
\t\t\t  console.log(\"apply event fired, start/end dates are \" + picker.startDate.format('MMMM D, YYYY') + \" to \" + picker.endDate.format('MMMM D, YYYY'));
\t\t\t});
\t\t\t\$('#reportrange').on('cancel.daterangepicker', function(ev, picker) {
\t\t\t  console.log(\"cancel event fired\");
\t\t\t});
\t\t\t\$('#options1').click(function() {
\t\t\t  \$('#reportrange').data('daterangepicker').setOptions(optionSet1, cb);
\t\t\t});
\t\t\t\$('#options2').click(function() {
\t\t\t  \$('#reportrange').data('daterangepicker').setOptions(optionSet2, cb);
\t\t\t});
\t\t\t\$('#destroy').click(function() {
\t\t\t  \$('#reportrange').data('daterangepicker').remove();
\t\t\t});
   
\t\t}
   \t   
\t   function init_daterangepicker_right() {

\t      
\t\t\t\tif( typeof (\$.fn.daterangepicker) === 'undefined'){ return; }
\t\t\t\tconsole.log('init_daterangepicker_right');
\t\t  
\t\t\t\tvar cb = function(start, end, label) {
\t\t\t\t  console.log(start.toISOString(), end.toISOString(), label);
\t\t\t\t  \$('#reportrange_right span').html(start.format('MMMM D, YYYY') + ' - ' + end.format('MMMM D, YYYY'));
\t\t\t\t};

\t\t\t\tvar optionSet1 = {
\t\t\t\t  startDate: moment().subtract(29, 'days'),
\t\t\t\t  endDate: moment(),
\t\t\t\t  minDate: '01/01/2012',
\t\t\t\t  maxDate: '12/31/2020',
\t\t\t\t  dateLimit: {
\t\t\t\t\tdays: 60
\t\t\t\t  },
\t\t\t\t  showDropdowns: true,
\t\t\t\t  showWeekNumbers: true,
\t\t\t\t  timePicker: false,
\t\t\t\t  timePickerIncrement: 1,
\t\t\t\t  timePicker12Hour: true,
\t\t\t\t  ranges: {
\t\t\t\t\t'Today': [moment(), moment()],
\t\t\t\t\t'Yesterday': [moment().subtract(1, 'days'), moment().subtract(1, 'days')],
\t\t\t\t\t'Last 7 Days': [moment().subtract(6, 'days'), moment()],
\t\t\t\t\t'Last 30 Days': [moment().subtract(29, 'days'), moment()],
\t\t\t\t\t'This Month': [moment().startOf('month'), moment().endOf('month')],
\t\t\t\t\t'Last Month': [moment().subtract(1, 'month').startOf('month'), moment().subtract(1, 'month').endOf('month')]
\t\t\t\t  },
\t\t\t\t  opens: 'right',
\t\t\t\t  buttonClasses: ['btn btn-default'],
\t\t\t\t  applyClass: 'btn-small btn-primary',
\t\t\t\t  cancelClass: 'btn-small',
\t\t\t\t  format: 'MM/DD/YYYY',
\t\t\t\t  separator: ' to ',
\t\t\t\t  locale: {
\t\t\t\t\tapplyLabel: 'Submit',
\t\t\t\t\tcancelLabel: 'Clear',
\t\t\t\t\tfromLabel: 'From',
\t\t\t\t\ttoLabel: 'To',
\t\t\t\t\tcustomRangeLabel: 'Custom',
\t\t\t\t\tdaysOfWeek: ['Su', 'Mo', 'Tu', 'We', 'Th', 'Fr', 'Sa'],
\t\t\t\t\tmonthNames: ['January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December'],
\t\t\t\t\tfirstDay: 1
\t\t\t\t  }
\t\t\t\t};

\t\t\t\t\$('#reportrange_right span').html(moment().subtract(29, 'days').format('MMMM D, YYYY') + ' - ' + moment().format('MMMM D, YYYY'));

\t\t\t\t\$('#reportrange_right').daterangepicker(optionSet1, cb);

\t\t\t\t\$('#reportrange_right').on('show.daterangepicker', function() {
\t\t\t\t  console.log(\"show event fired\");
\t\t\t\t});
\t\t\t\t\$('#reportrange_right').on('hide.daterangepicker', function() {
\t\t\t\t  console.log(\"hide event fired\");
\t\t\t\t});
\t\t\t\t\$('#reportrange_right').on('apply.daterangepicker', function(ev, picker) {
\t\t\t\t  console.log(\"apply event fired, start/end dates are \" + picker.startDate.format('MMMM D, YYYY') + \" to \" + picker.endDate.format('MMMM D, YYYY'));
\t\t\t\t});
\t\t\t\t\$('#reportrange_right').on('cancel.daterangepicker', function(ev, picker) {
\t\t\t\t  console.log(\"cancel event fired\");
\t\t\t\t});

\t\t\t\t\$('#options1').click(function() {
\t\t\t\t  \$('#reportrange_right').data('daterangepicker').setOptions(optionSet1, cb);
\t\t\t\t});

\t\t\t\t\$('#options2').click(function() {
\t\t\t\t  \$('#reportrange_right').data('daterangepicker').setOptions(optionSet2, cb);
\t\t\t\t});

\t\t\t\t\$('#destroy').click(function() {
\t\t\t\t  \$('#reportrange_right').data('daterangepicker').remove();
\t\t\t\t});

\t   }
\t   
\t    function init_daterangepicker_single_call() {
\t      
\t\t\tif( typeof (\$.fn.daterangepicker) === 'undefined'){ return; }
\t\t\tconsole.log('init_daterangepicker_single_call');
\t\t   
\t\t\t\$('#single_cal1').daterangepicker({
\t\t\t  singleDatePicker: true,
\t\t\t  singleClasses: \"picker_1\"
\t\t\t}, function(start, end, label) {
\t\t\t  console.log(start.toISOString(), end.toISOString(), label);
\t\t\t});
\t\t\t\$('#single_cal2').daterangepicker({
\t\t\t  singleDatePicker: true,
\t\t\t  singleClasses: \"picker_2\"
\t\t\t}, function(start, end, label) {
\t\t\t  console.log(start.toISOString(), end.toISOString(), label);
\t\t\t});
\t\t\t\$('#single_cal3').daterangepicker({
\t\t\t  singleDatePicker: true,
\t\t\t  singleClasses: \"picker_3\"
\t\t\t}, function(start, end, label) {
\t\t\t  console.log(start.toISOString(), end.toISOString(), label);
\t\t\t});
\t\t\t\$('#single_cal4').daterangepicker({
\t\t\t  singleDatePicker: true,
\t\t\t  singleClasses: \"picker_4\"
\t\t\t}, function(start, end, label) {
\t\t\t  console.log(start.toISOString(), end.toISOString(), label);
\t\t\t});
  
  
\t\t}
\t\t
\t\t 
\t\tfunction init_daterangepicker_reservation() {
\t      
\t\t\tif( typeof (\$.fn.daterangepicker) === 'undefined'){ return; }
\t\t\tconsole.log('init_daterangepicker_reservation');
\t\t 
\t\t\t\$('#reservation').daterangepicker(null, function(start, end, label) {
\t\t\t  console.log(start.toISOString(), end.toISOString(), label);
\t\t\t});

\t\t\t\$('#reservation-time').daterangepicker({
\t\t\t  timePicker: true,
\t\t\t  timePickerIncrement: 30,
\t\t\t  locale: {
\t\t\t\tformat: 'MM/DD/YYYY h:mm A'
\t\t\t  }
\t\t\t});
\t
\t\t}
\t   
\t   /* SMART WIZARD */
\t\t
\t\tfunction init_SmartWizard() {
\t\t\t
\t\t\tif( typeof (\$.fn.smartWizard) === 'undefined'){ return; }
\t\t\tconsole.log('init_SmartWizard');
\t\t\t
\t\t\t\$('#wizard').smartWizard();

\t\t\t\$('#wizard_verticle').smartWizard({
\t\t\t  transitionEffect: 'slide'
\t\t\t});

\t\t\t\$('.buttonNext').addClass('btn btn-success');
\t\t\t\$('.buttonPrevious').addClass('btn btn-primary');
\t\t\t\$('.buttonFinish').addClass('btn btn-default');
\t\t\t
\t\t};
\t   
\t   
\t  /* VALIDATOR */

\t  function init_validator () {
\t\t 
\t\tif( typeof (validator) === 'undefined'){ return; }
\t\tconsole.log('init_validator'); 
\t  
\t  // initialize the validator function
      validator.message.date = 'not a real date';

      // validate a field on \"blur\" event, a 'select' on 'change' event & a '.reuired' classed multifield on 'keyup':
      \$('form')
        .on('blur', 'input[required], input.optional, select.required', validator.checkField)
        .on('change', 'select.required', validator.checkField)
        .on('keypress', 'input[required][pattern]', validator.keypress);

      \$('.multi.required').on('keyup blur', 'input', function() {
        validator.checkField.apply(\$(this).siblings().last()[0]);
      });

      \$('form').submit(function(e) {
        e.preventDefault();
        var submit = true;

        // evaluate the form using generic validaing
        if (!validator.checkAll(\$(this))) {
          submit = false;
        }

        if (submit)
          this.submit();

        return false;
\t\t});
\t  
\t  };
\t   
\t  \t/* PNotify */
\t\t\t
\t\tfunction init_PNotify() {
\t\t\t
\t\t\tif( typeof (PNotify) === 'undefined'){ return; }
\t\t\tconsole.log('init_PNotify');
\t\t\t
\t\t\tnew PNotify({
\t\t\t  title: \"PNotify\",
\t\t\t  type: \"info\",
\t\t\t  text: \"Welcome. Try hovering over me. You can click things behind me, because I'm non-blocking.\",
\t\t\t  nonblock: {
\t\t\t\t  nonblock: true
\t\t\t  },
\t\t\t  addclass: 'dark',
\t\t\t  styling: 'bootstrap3',
\t\t\t  hide: false,
\t\t\t  before_close: function(PNotify) {
\t\t\t\tPNotify.update({
\t\t\t\t  title: PNotify.options.title + \" - Enjoy your Stay\",
\t\t\t\t  before_close: null
\t\t\t\t});

\t\t\t\tPNotify.queueRemove();

\t\t\t\treturn false;
\t\t\t  }
\t\t\t});

\t\t}; 
\t   
\t   
\t   /* CUSTOM NOTIFICATION */
\t\t\t
\t\tfunction init_CustomNotification() {
\t\t\t
\t\t\tconsole.log('run_customtabs');
\t\t\t
\t\t\tif( typeof (CustomTabs) === 'undefined'){ return; }
\t\t\tconsole.log('init_CustomTabs');
\t\t\t
\t\t\tvar cnt = 10;

\t\t\tTabbedNotification = function(options) {
\t\t\t  var message = \"<div id='ntf\" + cnt + \"' class='text alert-\" + options.type + \"' style='display:none'><h2><i class='fa fa-bell'></i> \" + options.title +
\t\t\t\t\"</h2><div class='close'><a href='javascript:;' class='notification_close'><i class='fa fa-close'></i></a></div><p>\" + options.text + \"</p></div>\";

\t\t\t  if (!document.getElementById('custom_notifications')) {
\t\t\t\talert('doesnt exists');
\t\t\t  } else {
\t\t\t\t\$('#custom_notifications ul.notifications').append(\"<li><a id='ntlink\" + cnt + \"' class='alert-\" + options.type + \"' href='#ntf\" + cnt + \"'><i class='fa fa-bell animated shake'></i></a></li>\");
\t\t\t\t\$('#custom_notifications #notif-group').append(message);
\t\t\t\tcnt++;
\t\t\t\tCustomTabs(options);
\t\t\t  }
\t\t\t};

\t\t\tCustomTabs = function(options) {
\t\t\t  \$('.tabbed_notifications > div').hide();
\t\t\t  \$('.tabbed_notifications > div:first-of-type').show();
\t\t\t  \$('#custom_notifications').removeClass('dsp_none');
\t\t\t  \$('.notifications a').click(function(e) {
\t\t\t\te.preventDefault();
\t\t\t\tvar \$this = \$(this),
\t\t\t\t  tabbed_notifications = '#' + \$this.parents('.notifications').data('tabbed_notifications'),
\t\t\t\t  others = \$this.closest('li').siblings().children('a'),
\t\t\t\t  target = \$this.attr('href');
\t\t\t\tothers.removeClass('active');
\t\t\t\t\$this.addClass('active');
\t\t\t\t\$(tabbed_notifications).children('div').hide();
\t\t\t\t\$(target).show();
\t\t\t  });
\t\t\t};

\t\t\tCustomTabs();

\t\t\tvar tabid = idname = '';

\t\t\t\$(document).on('click', '.notification_close', function(e) {
\t\t\t  idname = \$(this).parent().parent().attr(\"id\");
\t\t\t  tabid = idname.substr(-2);
\t\t\t  \$('#ntf' + tabid).remove();
\t\t\t  \$('#ntlink' + tabid).parent().remove();
\t\t\t  \$('.notifications a').first().addClass('active');
\t\t\t  \$('#notif-group div').first().css('display', 'block');
\t\t\t});
\t\t\t
\t\t};
\t\t
\t\t\t/* EASYPIECHART */
\t\t\t
\t\t\tfunction init_EasyPieChart() {
\t\t\t\t
\t\t\t\tif( typeof (\$.fn.easyPieChart) === 'undefined'){ return; }
\t\t\t\tconsole.log('init_EasyPieChart');
\t\t\t\t
\t\t\t\t\$('.chart').easyPieChart({
\t\t\t\t  easing: 'easeOutElastic',
\t\t\t\t  delay: 3000,
\t\t\t\t  barColor: '#26B99A',
\t\t\t\t  trackColor: '#fff',
\t\t\t\t  scaleColor: false,
\t\t\t\t  lineWidth: 20,
\t\t\t\t  trackWidth: 16,
\t\t\t\t  lineCap: 'butt',
\t\t\t\t  onStep: function(from, to, percent) {
\t\t\t\t\t\$(this.el).find('.percent').text(Math.round(percent));
\t\t\t\t  }
\t\t\t\t});
\t\t\t\tvar chart = window.chart = \$('.chart').data('easyPieChart');
\t\t\t\t\$('.js_update').on('click', function() {
\t\t\t\t  chart.update(Math.random() * 200 - 100);
\t\t\t\t});

\t\t\t\t//hover and retain popover when on popover content
\t\t\t\tvar originalLeave = \$.fn.popover.Constructor.prototype.leave;
\t\t\t\t\$.fn.popover.Constructor.prototype.leave = function(obj) {
\t\t\t\t  var self = obj instanceof this.constructor ?
\t\t\t\t\tobj : \$(obj.currentTarget)[this.type](this.getDelegateOptions()).data('bs.' + this.type);
\t\t\t\t  var container, timeout;

\t\t\t\t  originalLeave.call(this, obj);

\t\t\t\t  if (obj.currentTarget) {
\t\t\t\t\tcontainer = \$(obj.currentTarget).siblings('.popover');
\t\t\t\t\ttimeout = self.timeout;
\t\t\t\t\tcontainer.one('mouseenter', function() {
\t\t\t\t\t  //We entered the actual popover – call off the dogs
\t\t\t\t\t  clearTimeout(timeout);
\t\t\t\t\t  //Let's monitor popover content instead
\t\t\t\t\t  container.one('mouseleave', function() {
\t\t\t\t\t\t\$.fn.popover.Constructor.prototype.leave.call(self, self);
\t\t\t\t\t  });
\t\t\t\t\t});
\t\t\t\t  }
\t\t\t\t};

\t\t\t\t\$('body').popover({
\t\t\t\t  selector: '[data-popover]',
\t\t\t\t  trigger: 'click hover',
\t\t\t\t  delay: {
\t\t\t\t\tshow: 50,
\t\t\t\t\thide: 400
\t\t\t\t  }
\t\t\t\t});
\t\t\t\t
\t\t\t};
\t   
\t\t
\t\tfunction init_charts() {
\t\t\t
\t\t\t\tconsole.log('run_charts  typeof [' + typeof (Chart) + ']');
\t\t\t
\t\t\t\tif( typeof (Chart) === 'undefined'){ return; }
\t\t\t\t
\t\t\t\tconsole.log('init_charts');
\t\t\t
\t\t\t\t
\t\t\t\tChart.defaults.global.legend = {
\t\t\t\t\tenabled: false
\t\t\t\t};
\t\t\t\t
\t\t\t\t

\t\t\tif (\$('#canvas_line').length ){
\t\t\t\t
\t\t\t\tvar canvas_line_00 = new Chart(document.getElementById(\"canvas_line\"), {
\t\t\t\t  type: 'line',
\t\t\t\t  data: {
\t\t\t\t\tlabels: [\"January\", \"February\", \"March\", \"April\", \"May\", \"June\", \"July\"],
\t\t\t\t\tdatasets: [{
\t\t\t\t\t  label: \"My First dataset\",
\t\t\t\t\t  backgroundColor: \"rgba(38, 185, 154, 0.31)\",
\t\t\t\t\t  borderColor: \"rgba(38, 185, 154, 0.7)\",
\t\t\t\t\t  pointBorderColor: \"rgba(38, 185, 154, 0.7)\",
\t\t\t\t\t  pointBackgroundColor: \"rgba(38, 185, 154, 0.7)\",
\t\t\t\t\t  pointHoverBackgroundColor: \"#fff\",
\t\t\t\t\t  pointHoverBorderColor: \"rgba(220,220,220,1)\",
\t\t\t\t\t  pointBorderWidth: 1,
\t\t\t\t\t  data: [31, 74, 6, 39, 20, 85, 7]
\t\t\t\t\t}, {
\t\t\t\t\t  label: \"My Second dataset\",
\t\t\t\t\t  backgroundColor: \"rgba(3, 88, 106, 0.3)\",
\t\t\t\t\t  borderColor: \"rgba(3, 88, 106, 0.70)\",
\t\t\t\t\t  pointBorderColor: \"rgba(3, 88, 106, 0.70)\",
\t\t\t\t\t  pointBackgroundColor: \"rgba(3, 88, 106, 0.70)\",
\t\t\t\t\t  pointHoverBackgroundColor: \"#fff\",
\t\t\t\t\t  pointHoverBorderColor: \"rgba(151,187,205,1)\",
\t\t\t\t\t  pointBorderWidth: 1,
\t\t\t\t\t  data: [82, 23, 66, 9, 99, 4, 2]
\t\t\t\t\t}]
\t\t\t\t  },
\t\t\t\t});
\t\t\t\t
\t\t\t}

\t\t\t
\t\t\tif (\$('#canvas_line1').length ){
\t\t\t
\t\t\t\tvar canvas_line_01 = new Chart(document.getElementById(\"canvas_line1\"), {
\t\t\t\t  type: 'line',
\t\t\t\t  data: {
\t\t\t\t\tlabels: [\"January\", \"February\", \"March\", \"April\", \"May\", \"June\", \"July\"],
\t\t\t\t\tdatasets: [{
\t\t\t\t\t  label: \"My First dataset\",
\t\t\t\t\t  backgroundColor: \"rgba(38, 185, 154, 0.31)\",
\t\t\t\t\t  borderColor: \"rgba(38, 185, 154, 0.7)\",
\t\t\t\t\t  pointBorderColor: \"rgba(38, 185, 154, 0.7)\",
\t\t\t\t\t  pointBackgroundColor: \"rgba(38, 185, 154, 0.7)\",
\t\t\t\t\t  pointHoverBackgroundColor: \"#fff\",
\t\t\t\t\t  pointHoverBorderColor: \"rgba(220,220,220,1)\",
\t\t\t\t\t  pointBorderWidth: 1,
\t\t\t\t\t  data: [31, 74, 6, 39, 20, 85, 7]
\t\t\t\t\t}, {
\t\t\t\t\t  label: \"My Second dataset\",
\t\t\t\t\t  backgroundColor: \"rgba(3, 88, 106, 0.3)\",
\t\t\t\t\t  borderColor: \"rgba(3, 88, 106, 0.70)\",
\t\t\t\t\t  pointBorderColor: \"rgba(3, 88, 106, 0.70)\",
\t\t\t\t\t  pointBackgroundColor: \"rgba(3, 88, 106, 0.70)\",
\t\t\t\t\t  pointHoverBackgroundColor: \"#fff\",
\t\t\t\t\t  pointHoverBorderColor: \"rgba(151,187,205,1)\",
\t\t\t\t\t  pointBorderWidth: 1,
\t\t\t\t\t  data: [82, 23, 66, 9, 99, 4, 2]
\t\t\t\t\t}]
\t\t\t\t  },
\t\t\t\t});
\t\t\t
\t\t\t}
\t\t\t\t
\t\t\t\t
\t\t\tif (\$('#canvas_line2').length ){\t\t
\t\t\t
\t\t\t\tvar canvas_line_02 = new Chart(document.getElementById(\"canvas_line2\"), {
\t\t\t\t  type: 'line',
\t\t\t\t  data: {
\t\t\t\t\tlabels: [\"January\", \"February\", \"March\", \"April\", \"May\", \"June\", \"July\"],
\t\t\t\t\tdatasets: [{
\t\t\t\t\t  label: \"My First dataset\",
\t\t\t\t\t  backgroundColor: \"rgba(38, 185, 154, 0.31)\",
\t\t\t\t\t  borderColor: \"rgba(38, 185, 154, 0.7)\",
\t\t\t\t\t  pointBorderColor: \"rgba(38, 185, 154, 0.7)\",
\t\t\t\t\t  pointBackgroundColor: \"rgba(38, 185, 154, 0.7)\",
\t\t\t\t\t  pointHoverBackgroundColor: \"#fff\",
\t\t\t\t\t  pointHoverBorderColor: \"rgba(220,220,220,1)\",
\t\t\t\t\t  pointBorderWidth: 1,
\t\t\t\t\t  data: [31, 74, 6, 39, 20, 85, 7]
\t\t\t\t\t}, {
\t\t\t\t\t  label: \"My Second dataset\",
\t\t\t\t\t  backgroundColor: \"rgba(3, 88, 106, 0.3)\",
\t\t\t\t\t  borderColor: \"rgba(3, 88, 106, 0.70)\",
\t\t\t\t\t  pointBorderColor: \"rgba(3, 88, 106, 0.70)\",
\t\t\t\t\t  pointBackgroundColor: \"rgba(3, 88, 106, 0.70)\",
\t\t\t\t\t  pointHoverBackgroundColor: \"#fff\",
\t\t\t\t\t  pointHoverBorderColor: \"rgba(151,187,205,1)\",
\t\t\t\t\t  pointBorderWidth: 1,
\t\t\t\t\t  data: [82, 23, 66, 9, 99, 4, 2]
\t\t\t\t\t}]
\t\t\t\t  },
\t\t\t\t});

\t\t\t}\t
\t\t\t
\t\t\t
\t\t\tif (\$('#canvas_line3').length ){
\t\t\t
\t\t\t\tvar canvas_line_03 = new Chart(document.getElementById(\"canvas_line3\"), {
\t\t\t\t  type: 'line',
\t\t\t\t  data: {
\t\t\t\t\tlabels: [\"January\", \"February\", \"March\", \"April\", \"May\", \"June\", \"July\"],
\t\t\t\t\tdatasets: [{
\t\t\t\t\t  label: \"My First dataset\",
\t\t\t\t\t  backgroundColor: \"rgba(38, 185, 154, 0.31)\",
\t\t\t\t\t  borderColor: \"rgba(38, 185, 154, 0.7)\",
\t\t\t\t\t  pointBorderColor: \"rgba(38, 185, 154, 0.7)\",
\t\t\t\t\t  pointBackgroundColor: \"rgba(38, 185, 154, 0.7)\",
\t\t\t\t\t  pointHoverBackgroundColor: \"#fff\",
\t\t\t\t\t  pointHoverBorderColor: \"rgba(220,220,220,1)\",
\t\t\t\t\t  pointBorderWidth: 1,
\t\t\t\t\t  data: [31, 74, 6, 39, 20, 85, 7]
\t\t\t\t\t}, {
\t\t\t\t\t  label: \"My Second dataset\",
\t\t\t\t\t  backgroundColor: \"rgba(3, 88, 106, 0.3)\",
\t\t\t\t\t  borderColor: \"rgba(3, 88, 106, 0.70)\",
\t\t\t\t\t  pointBorderColor: \"rgba(3, 88, 106, 0.70)\",
\t\t\t\t\t  pointBackgroundColor: \"rgba(3, 88, 106, 0.70)\",
\t\t\t\t\t  pointHoverBackgroundColor: \"#fff\",
\t\t\t\t\t  pointHoverBorderColor: \"rgba(151,187,205,1)\",
\t\t\t\t\t  pointBorderWidth: 1,
\t\t\t\t\t  data: [82, 23, 66, 9, 99, 4, 2]
\t\t\t\t\t}]
\t\t\t\t  },
\t\t\t\t});

\t\t\t}\t
\t\t\t
\t\t\t
\t\t\tif (\$('#canvas_line4').length ){
\t\t\t\t
\t\t\t\tvar canvas_line_04 = new Chart(document.getElementById(\"canvas_line4\"), {
\t\t\t\t  type: 'line',
\t\t\t\t  data: {
\t\t\t\t\tlabels: [\"January\", \"February\", \"March\", \"April\", \"May\", \"June\", \"July\"],
\t\t\t\t\tdatasets: [{
\t\t\t\t\t  label: \"My First dataset\",
\t\t\t\t\t  backgroundColor: \"rgba(38, 185, 154, 0.31)\",
\t\t\t\t\t  borderColor: \"rgba(38, 185, 154, 0.7)\",
\t\t\t\t\t  pointBorderColor: \"rgba(38, 185, 154, 0.7)\",
\t\t\t\t\t  pointBackgroundColor: \"rgba(38, 185, 154, 0.7)\",
\t\t\t\t\t  pointHoverBackgroundColor: \"#fff\",
\t\t\t\t\t  pointHoverBorderColor: \"rgba(220,220,220,1)\",
\t\t\t\t\t  pointBorderWidth: 1,
\t\t\t\t\t  data: [31, 74, 6, 39, 20, 85, 7]
\t\t\t\t\t}, {
\t\t\t\t\t  label: \"My Second dataset\",
\t\t\t\t\t  backgroundColor: \"rgba(3, 88, 106, 0.3)\",
\t\t\t\t\t  borderColor: \"rgba(3, 88, 106, 0.70)\",
\t\t\t\t\t  pointBorderColor: \"rgba(3, 88, 106, 0.70)\",
\t\t\t\t\t  pointBackgroundColor: \"rgba(3, 88, 106, 0.70)\",
\t\t\t\t\t  pointHoverBackgroundColor: \"#fff\",
\t\t\t\t\t  pointHoverBorderColor: \"rgba(151,187,205,1)\",
\t\t\t\t\t  pointBorderWidth: 1,
\t\t\t\t\t  data: [82, 23, 66, 9, 99, 4, 2]
\t\t\t\t\t}]
\t\t\t\t  },
\t\t\t\t});\t\t
\t\t\t\t
\t\t\t}
\t\t\t
\t\t\t\t
\t\t\t  // Line chart
\t\t\t 
\t\t\tif (\$('#lineChart').length ){\t
\t\t\t
\t\t\t  var ctx = document.getElementById(\"lineChart\");
\t\t\t  var lineChart = new Chart(ctx, {
\t\t\t\ttype: 'line',
\t\t\t\tdata: {
\t\t\t\t  labels: [\"January\", \"February\", \"March\", \"April\", \"May\", \"June\", \"July\"],
\t\t\t\t  datasets: [{
\t\t\t\t\tlabel: \"My First dataset\",
\t\t\t\t\tbackgroundColor: \"rgba(38, 185, 154, 0.31)\",
\t\t\t\t\tborderColor: \"rgba(38, 185, 154, 0.7)\",
\t\t\t\t\tpointBorderColor: \"rgba(38, 185, 154, 0.7)\",
\t\t\t\t\tpointBackgroundColor: \"rgba(38, 185, 154, 0.7)\",
\t\t\t\t\tpointHoverBackgroundColor: \"#fff\",
\t\t\t\t\tpointHoverBorderColor: \"rgba(220,220,220,1)\",
\t\t\t\t\tpointBorderWidth: 1,
\t\t\t\t\tdata: [31, 74, 6, 39, 20, 85, 7]
\t\t\t\t  }, {
\t\t\t\t\tlabel: \"My Second dataset\",
\t\t\t\t\tbackgroundColor: \"rgba(3, 88, 106, 0.3)\",
\t\t\t\t\tborderColor: \"rgba(3, 88, 106, 0.70)\",
\t\t\t\t\tpointBorderColor: \"rgba(3, 88, 106, 0.70)\",
\t\t\t\t\tpointBackgroundColor: \"rgba(3, 88, 106, 0.70)\",
\t\t\t\t\tpointHoverBackgroundColor: \"#fff\",
\t\t\t\t\tpointHoverBorderColor: \"rgba(151,187,205,1)\",
\t\t\t\t\tpointBorderWidth: 1,
\t\t\t\t\tdata: [82, 23, 66, 9, 99, 4, 2]
\t\t\t\t  }]
\t\t\t\t},
\t\t\t  });
\t\t\t
\t\t\t}
\t\t\t\t
\t\t\t  // Bar chart
\t\t\t  
\t\t\tif (\$('#mybarChart').length ){ 
\t\t\t  
\t\t\t  var ctx = document.getElementById(\"mybarChart\");
\t\t\t  var mybarChart = new Chart(ctx, {
\t\t\t\ttype: 'bar',
\t\t\t\tdata: {
\t\t\t\t  labels: [\"January\", \"February\", \"March\", \"April\", \"May\", \"June\", \"July\"],
\t\t\t\t  datasets: [{
\t\t\t\t\tlabel: '# of Votes',
\t\t\t\t\tbackgroundColor: \"#26B99A\",
\t\t\t\t\tdata: [51, 30, 40, 28, 92, 50, 45]
\t\t\t\t  }, {
\t\t\t\t\tlabel: '# of Votes',
\t\t\t\t\tbackgroundColor: \"#03586A\",
\t\t\t\t\tdata: [41, 56, 25, 48, 72, 34, 12]
\t\t\t\t  }]
\t\t\t\t},

\t\t\t\toptions: {
\t\t\t\t  scales: {
\t\t\t\t\tyAxes: [{
\t\t\t\t\t  ticks: {
\t\t\t\t\t\tbeginAtZero: true
\t\t\t\t\t  }
\t\t\t\t\t}]
\t\t\t\t  }
\t\t\t\t}
\t\t\t  });
\t\t\t  
\t\t\t} 
\t\t\t  

\t\t\t  // Doughnut chart
\t\t\t  
\t\t\tif (\$('#canvasDoughnut').length ){ 
\t\t\t  
\t\t\t  var ctx = document.getElementById(\"canvasDoughnut\");
\t\t\t  var data = {
\t\t\t\tlabels: [
\t\t\t\t  \"Dark Grey\",
\t\t\t\t  \"Purple Color\",
\t\t\t\t  \"Gray Color\",
\t\t\t\t  \"Green Color\",
\t\t\t\t  \"Blue Color\"
\t\t\t\t],
\t\t\t\tdatasets: [{
\t\t\t\t  data: [120, 50, 140, 180, 100],
\t\t\t\t  backgroundColor: [
\t\t\t\t\t\"#455C73\",
\t\t\t\t\t\"#9B59B6\",
\t\t\t\t\t\"#BDC3C7\",
\t\t\t\t\t\"#26B99A\",
\t\t\t\t\t\"#3498DB\"
\t\t\t\t  ],
\t\t\t\t  hoverBackgroundColor: [
\t\t\t\t\t\"#34495E\",
\t\t\t\t\t\"#B370CF\",
\t\t\t\t\t\"#CFD4D8\",
\t\t\t\t\t\"#36CAAB\",
\t\t\t\t\t\"#49A9EA\"
\t\t\t\t  ]

\t\t\t\t}]
\t\t\t  };

\t\t\t  var canvasDoughnut = new Chart(ctx, {
\t\t\t\ttype: 'doughnut',
\t\t\t\ttooltipFillColor: \"rgba(51, 51, 51, 0.55)\",
\t\t\t\tdata: data
\t\t\t  });
\t\t\t 
\t\t\t} 

\t\t\t  // Radar chart
\t\t\t  
\t\t\tif (\$('#canvasRadar').length ){ 
\t\t\t  
\t\t\t  var ctx = document.getElementById(\"canvasRadar\");
\t\t\t  var data = {
\t\t\t\tlabels: [\"Eating\", \"Drinking\", \"Sleeping\", \"Designing\", \"Coding\", \"Cycling\", \"Running\"],
\t\t\t\tdatasets: [{
\t\t\t\t  label: \"My First dataset\",
\t\t\t\t  backgroundColor: \"rgba(3, 88, 106, 0.2)\",
\t\t\t\t  borderColor: \"rgba(3, 88, 106, 0.80)\",
\t\t\t\t  pointBorderColor: \"rgba(3, 88, 106, 0.80)\",
\t\t\t\t  pointBackgroundColor: \"rgba(3, 88, 106, 0.80)\",
\t\t\t\t  pointHoverBackgroundColor: \"#fff\",
\t\t\t\t  pointHoverBorderColor: \"rgba(220,220,220,1)\",
\t\t\t\t  data: [65, 59, 90, 81, 56, 55, 40]
\t\t\t\t}, {
\t\t\t\t  label: \"My Second dataset\",
\t\t\t\t  backgroundColor: \"rgba(38, 185, 154, 0.2)\",
\t\t\t\t  borderColor: \"rgba(38, 185, 154, 0.85)\",
\t\t\t\t  pointColor: \"rgba(38, 185, 154, 0.85)\",
\t\t\t\t  pointStrokeColor: \"#fff\",
\t\t\t\t  pointHighlightFill: \"#fff\",
\t\t\t\t  pointHighlightStroke: \"rgba(151,187,205,1)\",
\t\t\t\t  data: [28, 48, 40, 19, 96, 27, 100]
\t\t\t\t}]
\t\t\t  };

\t\t\t  var canvasRadar = new Chart(ctx, {
\t\t\t\ttype: 'radar',
\t\t\t\tdata: data,
\t\t\t  });
\t\t\t
\t\t\t}
\t\t\t
\t\t\t
\t\t\t  // Pie chart
\t\t\t  if (\$('#pieChart').length ){
\t\t\t\t  
\t\t\t\t  var ctx = document.getElementById(\"pieChart\");
\t\t\t\t  var data = {
\t\t\t\t\tdatasets: [{
\t\t\t\t\t  data: [120, 50, 140, 180, 100],
\t\t\t\t\t  backgroundColor: [
\t\t\t\t\t\t\"#455C73\",
\t\t\t\t\t\t\"#9B59B6\",
\t\t\t\t\t\t\"#BDC3C7\",
\t\t\t\t\t\t\"#26B99A\",
\t\t\t\t\t\t\"#3498DB\"
\t\t\t\t\t  ],
\t\t\t\t\t  label: 'My dataset' // for legend
\t\t\t\t\t}],
\t\t\t\t\tlabels: [
\t\t\t\t\t  \"Dark Gray\",
\t\t\t\t\t  \"Purple\",
\t\t\t\t\t  \"Gray\",
\t\t\t\t\t  \"Green\",
\t\t\t\t\t  \"Blue\"
\t\t\t\t\t]
\t\t\t\t  };

\t\t\t\t  var pieChart = new Chart(ctx, {
\t\t\t\t\tdata: data,
\t\t\t\t\ttype: 'pie',
\t\t\t\t\totpions: {
\t\t\t\t\t  legend: false
\t\t\t\t\t}
\t\t\t\t  });
\t\t\t\t  
\t\t\t  }
\t\t\t
\t\t\t  
\t\t\t  // PolarArea chart

\t\t\tif (\$('#polarArea').length ){

\t\t\t\tvar ctx = document.getElementById(\"polarArea\");
\t\t\t\tvar data = {
\t\t\t\tdatasets: [{
\t\t\t\t  data: [120, 50, 140, 180, 100],
\t\t\t\t  backgroundColor: [
\t\t\t\t\t\"#455C73\",
\t\t\t\t\t\"#9B59B6\",
\t\t\t\t\t\"#BDC3C7\",
\t\t\t\t\t\"#26B99A\",
\t\t\t\t\t\"#3498DB\"
\t\t\t\t  ],
\t\t\t\t  label: 'My dataset'
\t\t\t\t}],
\t\t\t\tlabels: [
\t\t\t\t  \"Dark Gray\",
\t\t\t\t  \"Purple\",
\t\t\t\t  \"Gray\",
\t\t\t\t  \"Green\",
\t\t\t\t  \"Blue\"
\t\t\t\t]
\t\t\t\t};

\t\t\t\tvar polarArea = new Chart(ctx, {
\t\t\t\tdata: data,
\t\t\t\ttype: 'polarArea',
\t\t\t\toptions: {
\t\t\t\t  scale: {
\t\t\t\t\tticks: {
\t\t\t\t\t  beginAtZero: true
\t\t\t\t\t}
\t\t\t\t  }
\t\t\t\t}
\t\t\t\t});
\t\t\t
\t\t\t}
\t\t}

\t\t/* COMPOSE */
\t\t
\t\tfunction init_compose() {
\t\t
\t\t\tif( typeof (\$.fn.slideToggle) === 'undefined'){ return; }
\t\t\tconsole.log('init_compose');
\t\t
\t\t\t\$('#compose, .compose-close').click(function(){
\t\t\t\t\$('.compose').slideToggle();
\t\t\t});
\t\t
\t\t};
\t   
\t   \t/* CALENDAR */
\t\t  
\t\t    function  init_calendar() {
\t\t\t\t\t
\t\t\t\tif( typeof (\$.fn.fullCalendar) === 'undefined'){ return; }
\t\t\t\tconsole.log('init_calendar');
\t\t\t\t\t
\t\t\t\tvar date = new Date(),
\t\t\t\t\td = date.getDate(),
\t\t\t\t\tm = date.getMonth(),
\t\t\t\t\ty = date.getFullYear(),
\t\t\t\t\tstarted,
\t\t\t\t\tcategoryClass;

\t\t\t\tvar calendar = \$('#calendar').fullCalendar({
\t\t\t\t  header: {
\t\t\t\t\tleft: 'prev,next today',
\t\t\t\t\tcenter: 'title',
\t\t\t\t\tright: 'month,agendaWeek,agendaDay,listMonth'
\t\t\t\t  },
\t\t\t\t  selectable: true,
\t\t\t\t  selectHelper: true,
\t\t\t\t  select: function(start, end, allDay) {
\t\t\t\t\t\$('#fc_create').click();

\t\t\t\t\tstarted = start;
\t\t\t\t\tended = end;

\t\t\t\t\t\$(\".antosubmit\").on(\"click\", function() {
\t\t\t\t\t  var title = \$(\"#title\").val();
\t\t\t\t\t  if (end) {
\t\t\t\t\t\tended = end;
\t\t\t\t\t  }

\t\t\t\t\t  categoryClass = \$(\"#event_type\").val();

\t\t\t\t\t  if (title) {
\t\t\t\t\t\tcalendar.fullCalendar('renderEvent', {
\t\t\t\t\t\t\ttitle: title,
\t\t\t\t\t\t\tstart: started,
\t\t\t\t\t\t\tend: end,
\t\t\t\t\t\t\tallDay: allDay
\t\t\t\t\t\t  },
\t\t\t\t\t\t  true // make the event \"stick\"
\t\t\t\t\t\t);
\t\t\t\t\t  }

\t\t\t\t\t  \$('#title').val('');

\t\t\t\t\t  calendar.fullCalendar('unselect');

\t\t\t\t\t  \$('.antoclose').click();

\t\t\t\t\t  return false;
\t\t\t\t\t});
\t\t\t\t  },
\t\t\t\t  eventClick: function(calEvent, jsEvent, view) {
\t\t\t\t\t\$('#fc_edit').click();
\t\t\t\t\t\$('#title2').val(calEvent.title);

\t\t\t\t\tcategoryClass = \$(\"#event_type\").val();

\t\t\t\t\t\$(\".antosubmit2\").on(\"click\", function() {
\t\t\t\t\t  calEvent.title = \$(\"#title2\").val();

\t\t\t\t\t  calendar.fullCalendar('updateEvent', calEvent);
\t\t\t\t\t  \$('.antoclose2').click();
\t\t\t\t\t});

\t\t\t\t\tcalendar.fullCalendar('unselect');
\t\t\t\t  },
\t\t\t\t  editable: true,
\t\t\t\t  events: [{
\t\t\t\t\ttitle: 'All Day Event',
\t\t\t\t\tstart: new Date(y, m, 1)
\t\t\t\t  }, {
\t\t\t\t\ttitle: 'Long Event',
\t\t\t\t\tstart: new Date(y, m, d - 5),
\t\t\t\t\tend: new Date(y, m, d - 2)
\t\t\t\t  }, {
\t\t\t\t\ttitle: 'Meeting',
\t\t\t\t\tstart: new Date(y, m, d, 10, 30),
\t\t\t\t\tallDay: false
\t\t\t\t  }, {
\t\t\t\t\ttitle: 'Lunch',
\t\t\t\t\tstart: new Date(y, m, d + 14, 12, 0),
\t\t\t\t\tend: new Date(y, m, d, 14, 0),
\t\t\t\t\tallDay: false
\t\t\t\t  }, {
\t\t\t\t\ttitle: 'Birthday Party',
\t\t\t\t\tstart: new Date(y, m, d + 1, 19, 0),
\t\t\t\t\tend: new Date(y, m, d + 1, 22, 30),
\t\t\t\t\tallDay: false
\t\t\t\t  }, {
\t\t\t\t\ttitle: 'Click for Google',
\t\t\t\t\tstart: new Date(y, m, 28),
\t\t\t\t\tend: new Date(y, m, 29),
\t\t\t\t\turl: 'http://google.com/'
\t\t\t\t  }]
\t\t\t\t});
\t\t\t\t
\t\t\t};
\t   
\t\t/* DATA TABLES */
\t\t\t
\t\t\tfunction init_DataTables() {
\t\t\t\t
\t\t\t\tconsole.log('run_datatables');
\t\t\t\t
\t\t\t\tif( typeof (\$.fn.DataTable) === 'undefined'){ return; }
\t\t\t\tconsole.log('init_DataTables');
\t\t\t\t
\t\t\t\tvar handleDataTableButtons = function() {
\t\t\t\t  if (\$(\"#datatable-buttons\").length) {
\t\t\t\t\t\$(\"#datatable-buttons\").DataTable({
\t\t\t\t\t  dom: \"Bfrtip\",
\t\t\t\t\t  buttons: [
\t\t\t\t\t\t{
\t\t\t\t\t\t  extend: \"copy\",
\t\t\t\t\t\t  className: \"btn-sm\"
\t\t\t\t\t\t},
\t\t\t\t\t\t{
\t\t\t\t\t\t  extend: \"csv\",
\t\t\t\t\t\t  className: \"btn-sm\"
\t\t\t\t\t\t},
\t\t\t\t\t\t{
\t\t\t\t\t\t  extend: \"excel\",
\t\t\t\t\t\t  className: \"btn-sm\"
\t\t\t\t\t\t},
\t\t\t\t\t\t{
\t\t\t\t\t\t  extend: \"pdfHtml5\",
\t\t\t\t\t\t  className: \"btn-sm\"
\t\t\t\t\t\t},
\t\t\t\t\t\t{
\t\t\t\t\t\t  extend: \"print\",
\t\t\t\t\t\t  className: \"btn-sm\"
\t\t\t\t\t\t},
\t\t\t\t\t  ],
\t\t\t\t\t  responsive: true
\t\t\t\t\t});
\t\t\t\t  }
\t\t\t\t};

\t\t\t\tTableManageButtons = function() {
\t\t\t\t  \"use strict\";
\t\t\t\t  return {
\t\t\t\t\tinit: function() {
\t\t\t\t\t  handleDataTableButtons();
\t\t\t\t\t}
\t\t\t\t  };
\t\t\t\t}();

\t\t\t\t\$('#datatable').dataTable();

\t\t\t\t\$('#datatable-keytable').DataTable({
\t\t\t\t  keys: true
\t\t\t\t});

\t\t\t\t\$('#datatable-responsive').DataTable();

\t\t\t\t\$('#datatable-scroller').DataTable({
\t\t\t\t  ajax: \"js/datatables/json/scroller-demo.json\",
\t\t\t\t  deferRender: true,
\t\t\t\t  scrollY: 380,
\t\t\t\t  scrollCollapse: true,
\t\t\t\t  scroller: true
\t\t\t\t});

\t\t\t\t\$('#datatable-fixed-header').DataTable({
\t\t\t\t  fixedHeader: true
\t\t\t\t});

\t\t\t\tvar \$datatable = \$('#datatable-checkbox');

\t\t\t\t\$datatable.dataTable({
\t\t\t\t  'order': [[ 1, 'asc' ]],
\t\t\t\t  'columnDefs': [
\t\t\t\t\t{ orderable: false, targets: [0] }
\t\t\t\t  ]
\t\t\t\t});
\t\t\t\t\$datatable.on('draw.dt', function() {
\t\t\t\t  \$('checkbox input').iCheck({
\t\t\t\t\tcheckboxClass: 'icheckbox_flat-green'
\t\t\t\t  });
\t\t\t\t});

\t\t\t\tTableManageButtons.init();
\t\t\t\t
\t\t\t};
\t   
\t\t\t/* CHART - MORRIS  */
\t\t
\t\tfunction init_morris_charts() {
\t\t\t
\t\t\tif( typeof (Morris) === 'undefined'){ return; }
\t\t\tconsole.log('init_morris_charts');
\t\t\t
\t\t\tif (\$('#graph_bar').length){ 
\t\t\t
\t\t\t\tMorris.Bar({
\t\t\t\t  element: 'graph_bar',
\t\t\t\t  data: [
\t\t\t\t\t{device: 'iPhone 4', geekbench: 380},
\t\t\t\t\t{device: 'iPhone 4S', geekbench: 655},
\t\t\t\t\t{device: 'iPhone 3GS', geekbench: 275},
\t\t\t\t\t{device: 'iPhone 5', geekbench: 1571},
\t\t\t\t\t{device: 'iPhone 5S', geekbench: 655},
\t\t\t\t\t{device: 'iPhone 6', geekbench: 2154},
\t\t\t\t\t{device: 'iPhone 6 Plus', geekbench: 1144},
\t\t\t\t\t{device: 'iPhone 6S', geekbench: 2371},
\t\t\t\t\t{device: 'iPhone 6S Plus', geekbench: 1471},
\t\t\t\t\t{device: 'Other', geekbench: 1371}
\t\t\t\t  ],
\t\t\t\t  xkey: 'device',
\t\t\t\t  ykeys: ['geekbench'],
\t\t\t\t  labels: ['Geekbench'],
\t\t\t\t  barRatio: 0.4,
\t\t\t\t  barColors: ['#26B99A', '#34495E', '#ACADAC', '#3498DB'],
\t\t\t\t  xLabelAngle: 35,
\t\t\t\t  hideHover: 'auto',
\t\t\t\t  resize: true
\t\t\t\t});

\t\t\t}\t
\t\t\t
\t\t\tif (\$('#graph_bar_group').length ){
\t\t\t
\t\t\t\tMorris.Bar({
\t\t\t\t  element: 'graph_bar_group',
\t\t\t\t  data: [
\t\t\t\t\t{\"period\": \"2016-10-01\", \"licensed\": 807, \"sorned\": 660},
\t\t\t\t\t{\"period\": \"2016-09-30\", \"licensed\": 1251, \"sorned\": 729},
\t\t\t\t\t{\"period\": \"2016-09-29\", \"licensed\": 1769, \"sorned\": 1018},
\t\t\t\t\t{\"period\": \"2016-09-20\", \"licensed\": 2246, \"sorned\": 1461},
\t\t\t\t\t{\"period\": \"2016-09-19\", \"licensed\": 2657, \"sorned\": 1967},
\t\t\t\t\t{\"period\": \"2016-09-18\", \"licensed\": 3148, \"sorned\": 2627},
\t\t\t\t\t{\"period\": \"2016-09-17\", \"licensed\": 3471, \"sorned\": 3740},
\t\t\t\t\t{\"period\": \"2016-09-16\", \"licensed\": 2871, \"sorned\": 2216},
\t\t\t\t\t{\"period\": \"2016-09-15\", \"licensed\": 2401, \"sorned\": 1656},
\t\t\t\t\t{\"period\": \"2016-09-10\", \"licensed\": 2115, \"sorned\": 1022}
\t\t\t\t  ],
\t\t\t\t  xkey: 'period',
\t\t\t\t  barColors: ['#26B99A', '#34495E', '#ACADAC', '#3498DB'],
\t\t\t\t  ykeys: ['licensed', 'sorned'],
\t\t\t\t  labels: ['Licensed', 'SORN'],
\t\t\t\t  hideHover: 'auto',
\t\t\t\t  xLabelAngle: 60,
\t\t\t\t  resize: true
\t\t\t\t});

\t\t\t}
\t\t\t
\t\t\tif (\$('#graphx').length ){
\t\t\t
\t\t\t\tMorris.Bar({
\t\t\t\t  element: 'graphx',
\t\t\t\t  data: [
\t\t\t\t\t{x: '2015 Q1', y: 2, z: 3, a: 4},
\t\t\t\t\t{x: '2015 Q2', y: 3, z: 5, a: 6},
\t\t\t\t\t{x: '2015 Q3', y: 4, z: 3, a: 2},
\t\t\t\t\t{x: '2015 Q4', y: 2, z: 4, a: 5}
\t\t\t\t  ],
\t\t\t\t  xkey: 'x',
\t\t\t\t  ykeys: ['y', 'z', 'a'],
\t\t\t\t  barColors: ['#26B99A', '#34495E', '#ACADAC', '#3498DB'],
\t\t\t\t  hideHover: 'auto',
\t\t\t\t  labels: ['Y', 'Z', 'A'],
\t\t\t\t  resize: true
\t\t\t\t}).on('click', function (i, row) {
\t\t\t\t\tconsole.log(i, row);
\t\t\t\t});

\t\t\t}
\t\t\t
\t\t\tif (\$('#graph_area').length ){
\t\t\t
\t\t\t\tMorris.Area({
\t\t\t\t  element: 'graph_area',
\t\t\t\t  data: [
\t\t\t\t\t{period: '2014 Q1', iphone: 2666, ipad: null, itouch: 2647},
\t\t\t\t\t{period: '2014 Q2', iphone: 2778, ipad: 2294, itouch: 2441},
\t\t\t\t\t{period: '2014 Q3', iphone: 4912, ipad: 1969, itouch: 2501},
\t\t\t\t\t{period: '2014 Q4', iphone: 3767, ipad: 3597, itouch: 5689},
\t\t\t\t\t{period: '2015 Q1', iphone: 6810, ipad: 1914, itouch: 2293},
\t\t\t\t\t{period: '2015 Q2', iphone: 5670, ipad: 4293, itouch: 1881},
\t\t\t\t\t{period: '2015 Q3', iphone: 4820, ipad: 3795, itouch: 1588},
\t\t\t\t\t{period: '2015 Q4', iphone: 15073, ipad: 5967, itouch: 5175},
\t\t\t\t\t{period: '2016 Q1', iphone: 10687, ipad: 4460, itouch: 2028},
\t\t\t\t\t{period: '2016 Q2', iphone: 8432, ipad: 5713, itouch: 1791}
\t\t\t\t  ],
\t\t\t\t  xkey: 'period',
\t\t\t\t  ykeys: ['iphone', 'ipad', 'itouch'],
\t\t\t\t  lineColors: ['#26B99A', '#34495E', '#ACADAC', '#3498DB'],
\t\t\t\t  labels: ['iPhone', 'iPad', 'iPod Touch'],
\t\t\t\t  pointSize: 2,
\t\t\t\t  hideHover: 'auto',
\t\t\t\t  resize: true
\t\t\t\t});

\t\t\t}
\t\t\t
\t\t\tif (\$('#graph_donut').length ){
\t\t\t
\t\t\t\tMorris.Donut({
\t\t\t\t  element: 'graph_donut',
\t\t\t\t  data: [
\t\t\t\t\t{label: 'Jam', value: 25},
\t\t\t\t\t{label: 'Frosted', value: 40},
\t\t\t\t\t{label: 'Custard', value: 25},
\t\t\t\t\t{label: 'Sugar', value: 10}
\t\t\t\t  ],
\t\t\t\t  colors: ['#26B99A', '#34495E', '#ACADAC', '#3498DB'],
\t\t\t\t  formatter: function (y) {
\t\t\t\t\treturn y + \"%\";
\t\t\t\t  },
\t\t\t\t  resize: true
\t\t\t\t});

\t\t\t}
\t\t\t
\t\t\tif (\$('#graph_line').length ){
\t\t\t
\t\t\t\tMorris.Line({
\t\t\t\t  element: 'graph_line',
\t\t\t\t  xkey: 'year',
\t\t\t\t  ykeys: ['value'],
\t\t\t\t  labels: ['Value'],
\t\t\t\t  hideHover: 'auto',
\t\t\t\t  lineColors: ['#26B99A', '#34495E', '#ACADAC', '#3498DB'],
\t\t\t\t  data: [
\t\t\t\t\t{year: '2012', value: 20},
\t\t\t\t\t{year: '2013', value: 10},
\t\t\t\t\t{year: '2014', value: 5},
\t\t\t\t\t{year: '2015', value: 5},
\t\t\t\t\t{year: '2016', value: 20}
\t\t\t\t  ],
\t\t\t\t  resize: true
\t\t\t\t});

\t\t\t\t\$MENU_TOGGLE.on('click', function() {
\t\t\t\t  \$(window).resize();
\t\t\t\t});
\t\t\t
\t\t\t}
\t\t\t
\t\t};
\t   
\t\t
\t\t
\t\t/* ECHRTS */
\t
\t\t
\t\tfunction init_echarts() {
\t\t
\t\t\t\tif( typeof (echarts) === 'undefined'){ return; }
\t\t\t\tconsole.log('init_echarts');
\t\t\t
\t\t
\t\t\t\t  var theme = {
\t\t\t\t  color: [
\t\t\t\t\t  '#26B99A', '#34495E', '#BDC3C7', '#3498DB',
\t\t\t\t\t  '#9B59B6', '#8abb6f', '#759c6a', '#bfd3b7'
\t\t\t\t  ],

\t\t\t\t  title: {
\t\t\t\t\t  itemGap: 8,
\t\t\t\t\t  textStyle: {
\t\t\t\t\t\t  fontWeight: 'normal',
\t\t\t\t\t\t  color: '#408829'
\t\t\t\t\t  }
\t\t\t\t  },

\t\t\t\t  dataRange: {
\t\t\t\t\t  color: ['#1f610a', '#97b58d']
\t\t\t\t  },

\t\t\t\t  toolbox: {
\t\t\t\t\t  color: ['#408829', '#408829', '#408829', '#408829']
\t\t\t\t  },

\t\t\t\t  tooltip: {
\t\t\t\t\t  backgroundColor: 'rgba(0,0,0,0.5)',
\t\t\t\t\t  axisPointer: {
\t\t\t\t\t\t  type: 'line',
\t\t\t\t\t\t  lineStyle: {
\t\t\t\t\t\t\t  color: '#408829',
\t\t\t\t\t\t\t  type: 'dashed'
\t\t\t\t\t\t  },
\t\t\t\t\t\t  crossStyle: {
\t\t\t\t\t\t\t  color: '#408829'
\t\t\t\t\t\t  },
\t\t\t\t\t\t  shadowStyle: {
\t\t\t\t\t\t\t  color: 'rgba(200,200,200,0.3)'
\t\t\t\t\t\t  }
\t\t\t\t\t  }
\t\t\t\t  },

\t\t\t\t  dataZoom: {
\t\t\t\t\t  dataBackgroundColor: '#eee',
\t\t\t\t\t  fillerColor: 'rgba(64,136,41,0.2)',
\t\t\t\t\t  handleColor: '#408829'
\t\t\t\t  },
\t\t\t\t  grid: {
\t\t\t\t\t  borderWidth: 0
\t\t\t\t  },

\t\t\t\t  categoryAxis: {
\t\t\t\t\t  axisLine: {
\t\t\t\t\t\t  lineStyle: {
\t\t\t\t\t\t\t  color: '#408829'
\t\t\t\t\t\t  }
\t\t\t\t\t  },
\t\t\t\t\t  splitLine: {
\t\t\t\t\t\t  lineStyle: {
\t\t\t\t\t\t\t  color: ['#eee']
\t\t\t\t\t\t  }
\t\t\t\t\t  }
\t\t\t\t  },

\t\t\t\t  valueAxis: {
\t\t\t\t\t  axisLine: {
\t\t\t\t\t\t  lineStyle: {
\t\t\t\t\t\t\t  color: '#408829'
\t\t\t\t\t\t  }
\t\t\t\t\t  },
\t\t\t\t\t  splitArea: {
\t\t\t\t\t\t  show: true,
\t\t\t\t\t\t  areaStyle: {
\t\t\t\t\t\t\t  color: ['rgba(250,250,250,0.1)', 'rgba(200,200,200,0.1)']
\t\t\t\t\t\t  }
\t\t\t\t\t  },
\t\t\t\t\t  splitLine: {
\t\t\t\t\t\t  lineStyle: {
\t\t\t\t\t\t\t  color: ['#eee']
\t\t\t\t\t\t  }
\t\t\t\t\t  }
\t\t\t\t  },
\t\t\t\t  timeline: {
\t\t\t\t\t  lineStyle: {
\t\t\t\t\t\t  color: '#408829'
\t\t\t\t\t  },
\t\t\t\t\t  controlStyle: {
\t\t\t\t\t\t  normal: {color: '#408829'},
\t\t\t\t\t\t  emphasis: {color: '#408829'}
\t\t\t\t\t  }
\t\t\t\t  },

\t\t\t\t  k: {
\t\t\t\t\t  itemStyle: {
\t\t\t\t\t\t  normal: {
\t\t\t\t\t\t\t  color: '#68a54a',
\t\t\t\t\t\t\t  color0: '#a9cba2',
\t\t\t\t\t\t\t  lineStyle: {
\t\t\t\t\t\t\t\t  width: 1,
\t\t\t\t\t\t\t\t  color: '#408829',
\t\t\t\t\t\t\t\t  color0: '#86b379'
\t\t\t\t\t\t\t  }
\t\t\t\t\t\t  }
\t\t\t\t\t  }
\t\t\t\t  },
\t\t\t\t  map: {
\t\t\t\t\t  itemStyle: {
\t\t\t\t\t\t  normal: {
\t\t\t\t\t\t\t  areaStyle: {
\t\t\t\t\t\t\t\t  color: '#ddd'
\t\t\t\t\t\t\t  },
\t\t\t\t\t\t\t  label: {
\t\t\t\t\t\t\t\t  textStyle: {
\t\t\t\t\t\t\t\t\t  color: '#c12e34'
\t\t\t\t\t\t\t\t  }
\t\t\t\t\t\t\t  }
\t\t\t\t\t\t  },
\t\t\t\t\t\t  emphasis: {
\t\t\t\t\t\t\t  areaStyle: {
\t\t\t\t\t\t\t\t  color: '#99d2dd'
\t\t\t\t\t\t\t  },
\t\t\t\t\t\t\t  label: {
\t\t\t\t\t\t\t\t  textStyle: {
\t\t\t\t\t\t\t\t\t  color: '#c12e34'
\t\t\t\t\t\t\t\t  }
\t\t\t\t\t\t\t  }
\t\t\t\t\t\t  }
\t\t\t\t\t  }
\t\t\t\t  },
\t\t\t\t  force: {
\t\t\t\t\t  itemStyle: {
\t\t\t\t\t\t  normal: {
\t\t\t\t\t\t\t  linkStyle: {
\t\t\t\t\t\t\t\t  strokeColor: '#408829'
\t\t\t\t\t\t\t  }
\t\t\t\t\t\t  }
\t\t\t\t\t  }
\t\t\t\t  },
\t\t\t\t  chord: {
\t\t\t\t\t  padding: 4,
\t\t\t\t\t  itemStyle: {
\t\t\t\t\t\t  normal: {
\t\t\t\t\t\t\t  lineStyle: {
\t\t\t\t\t\t\t\t  width: 1,
\t\t\t\t\t\t\t\t  color: 'rgba(128, 128, 128, 0.5)'
\t\t\t\t\t\t\t  },
\t\t\t\t\t\t\t  chordStyle: {
\t\t\t\t\t\t\t\t  lineStyle: {
\t\t\t\t\t\t\t\t\t  width: 1,
\t\t\t\t\t\t\t\t\t  color: 'rgba(128, 128, 128, 0.5)'
\t\t\t\t\t\t\t\t  }
\t\t\t\t\t\t\t  }
\t\t\t\t\t\t  },
\t\t\t\t\t\t  emphasis: {
\t\t\t\t\t\t\t  lineStyle: {
\t\t\t\t\t\t\t\t  width: 1,
\t\t\t\t\t\t\t\t  color: 'rgba(128, 128, 128, 0.5)'
\t\t\t\t\t\t\t  },
\t\t\t\t\t\t\t  chordStyle: {
\t\t\t\t\t\t\t\t  lineStyle: {
\t\t\t\t\t\t\t\t\t  width: 1,
\t\t\t\t\t\t\t\t\t  color: 'rgba(128, 128, 128, 0.5)'
\t\t\t\t\t\t\t\t  }
\t\t\t\t\t\t\t  }
\t\t\t\t\t\t  }
\t\t\t\t\t  }
\t\t\t\t  },
\t\t\t\t  gauge: {
\t\t\t\t\t  startAngle: 225,
\t\t\t\t\t  endAngle: -45,
\t\t\t\t\t  axisLine: {
\t\t\t\t\t\t  show: true,
\t\t\t\t\t\t  lineStyle: {
\t\t\t\t\t\t\t  color: [[0.2, '#86b379'], [0.8, '#68a54a'], [1, '#408829']],
\t\t\t\t\t\t\t  width: 8
\t\t\t\t\t\t  }
\t\t\t\t\t  },
\t\t\t\t\t  axisTick: {
\t\t\t\t\t\t  splitNumber: 10,
\t\t\t\t\t\t  length: 12,
\t\t\t\t\t\t  lineStyle: {
\t\t\t\t\t\t\t  color: 'auto'
\t\t\t\t\t\t  }
\t\t\t\t\t  },
\t\t\t\t\t  axisLabel: {
\t\t\t\t\t\t  textStyle: {
\t\t\t\t\t\t\t  color: 'auto'
\t\t\t\t\t\t  }
\t\t\t\t\t  },
\t\t\t\t\t  splitLine: {
\t\t\t\t\t\t  length: 18,
\t\t\t\t\t\t  lineStyle: {
\t\t\t\t\t\t\t  color: 'auto'
\t\t\t\t\t\t  }
\t\t\t\t\t  },
\t\t\t\t\t  pointer: {
\t\t\t\t\t\t  length: '90%',
\t\t\t\t\t\t  color: 'auto'
\t\t\t\t\t  },
\t\t\t\t\t  title: {
\t\t\t\t\t\t  textStyle: {
\t\t\t\t\t\t\t  color: '#333'
\t\t\t\t\t\t  }
\t\t\t\t\t  },
\t\t\t\t\t  detail: {
\t\t\t\t\t\t  textStyle: {
\t\t\t\t\t\t\t  color: 'auto'
\t\t\t\t\t\t  }
\t\t\t\t\t  }
\t\t\t\t  },
\t\t\t\t  textStyle: {
\t\t\t\t\t  fontFamily: 'Arial, Verdana, sans-serif'
\t\t\t\t  }
\t\t\t  };

\t\t\t  
\t\t\t  //echart Bar
\t\t\t  
\t\t\tif (\$('#mainb').length ){
\t\t\t  
\t\t\t\t  var echartBar = echarts.init(document.getElementById('mainb'), theme);

\t\t\t\t  echartBar.setOption({
\t\t\t\t\ttitle: {
\t\t\t\t\t  text: 'Graph title',
\t\t\t\t\t  subtext: 'Graph Sub-text'
\t\t\t\t\t},
\t\t\t\t\ttooltip: {
\t\t\t\t\t  trigger: 'axis'
\t\t\t\t\t},
\t\t\t\t\tlegend: {
\t\t\t\t\t  data: ['sales', 'purchases']
\t\t\t\t\t},
\t\t\t\t\ttoolbox: {
\t\t\t\t\t  show: false
\t\t\t\t\t},
\t\t\t\t\tcalculable: false,
\t\t\t\t\txAxis: [{
\t\t\t\t\t  type: 'category',
\t\t\t\t\t  data: ['1?', '2?', '3?', '4?', '5?', '6?', '7?', '8?', '9?', '10?', '11?', '12?']
\t\t\t\t\t}],
\t\t\t\t\tyAxis: [{
\t\t\t\t\t  type: 'value'
\t\t\t\t\t}],
\t\t\t\t\tseries: [{
\t\t\t\t\t  name: 'sales',
\t\t\t\t\t  type: 'bar',
\t\t\t\t\t  data: [2.0, 4.9, 7.0, 23.2, 25.6, 76.7, 135.6, 162.2, 32.6, 20.0, 6.4, 3.3],
\t\t\t\t\t  markPoint: {
\t\t\t\t\t\tdata: [{
\t\t\t\t\t\t  type: 'max',
\t\t\t\t\t\t  name: '???'
\t\t\t\t\t\t}, {
\t\t\t\t\t\t  type: 'min',
\t\t\t\t\t\t  name: '???'
\t\t\t\t\t\t}]
\t\t\t\t\t  },
\t\t\t\t\t  markLine: {
\t\t\t\t\t\tdata: [{
\t\t\t\t\t\t  type: 'average',
\t\t\t\t\t\t  name: '???'
\t\t\t\t\t\t}]
\t\t\t\t\t  }
\t\t\t\t\t}, {
\t\t\t\t\t  name: 'purchases',
\t\t\t\t\t  type: 'bar',
\t\t\t\t\t  data: [2.6, 5.9, 9.0, 26.4, 28.7, 70.7, 175.6, 182.2, 48.7, 18.8, 6.0, 2.3],
\t\t\t\t\t  markPoint: {
\t\t\t\t\t\tdata: [{
\t\t\t\t\t\t  name: 'sales',
\t\t\t\t\t\t  value: 182.2,
\t\t\t\t\t\t  xAxis: 7,
\t\t\t\t\t\t  yAxis: 183,
\t\t\t\t\t\t}, {
\t\t\t\t\t\t  name: 'purchases',
\t\t\t\t\t\t  value: 2.3,
\t\t\t\t\t\t  xAxis: 11,
\t\t\t\t\t\t  yAxis: 3
\t\t\t\t\t\t}]
\t\t\t\t\t  },
\t\t\t\t\t  markLine: {
\t\t\t\t\t\tdata: [{
\t\t\t\t\t\t  type: 'average',
\t\t\t\t\t\t  name: '???'
\t\t\t\t\t\t}]
\t\t\t\t\t  }
\t\t\t\t\t}]
\t\t\t\t  });

\t\t\t}
\t\t\t  
\t\t\t  
\t\t\t  
\t\t\t  
\t\t\t   //echart Radar
\t\t\t  
\t\t\tif (\$('#echart_sonar').length ){ 
\t\t\t  
\t\t\t  var echartRadar = echarts.init(document.getElementById('echart_sonar'), theme);

\t\t\t  echartRadar.setOption({
\t\t\t\ttitle: {
\t\t\t\t  text: 'Budget vs spending',
\t\t\t\t  subtext: 'Subtitle'
\t\t\t\t},
\t\t\t\t tooltip: {
\t\t\t\t\ttrigger: 'item'
\t\t\t\t},
\t\t\t\tlegend: {
\t\t\t\t  orient: 'vertical',
\t\t\t\t  x: 'right',
\t\t\t\t  y: 'bottom',
\t\t\t\t  data: ['Allocated Budget', 'Actual Spending']
\t\t\t\t},
\t\t\t\ttoolbox: {
\t\t\t\t  show: true,
\t\t\t\t  feature: {
\t\t\t\t\trestore: {
\t\t\t\t\t  show: true,
\t\t\t\t\t  title: \"Restore\"
\t\t\t\t\t},
\t\t\t\t\tsaveAsImage: {
\t\t\t\t\t  show: true,
\t\t\t\t\t  title: \"Save Image\"
\t\t\t\t\t}
\t\t\t\t  }
\t\t\t\t},
\t\t\t\tpolar: [{
\t\t\t\t  indicator: [{
\t\t\t\t\ttext: 'Sales',
\t\t\t\t\tmax: 6000
\t\t\t\t  }, {
\t\t\t\t\ttext: 'Administration',
\t\t\t\t\tmax: 16000
\t\t\t\t  }, {
\t\t\t\t\ttext: 'Information Techology',
\t\t\t\t\tmax: 30000
\t\t\t\t  }, {
\t\t\t\t\ttext: 'Customer Support',
\t\t\t\t\tmax: 38000
\t\t\t\t  }, {
\t\t\t\t\ttext: 'Development',
\t\t\t\t\tmax: 52000
\t\t\t\t  }, {
\t\t\t\t\ttext: 'Marketing',
\t\t\t\t\tmax: 25000
\t\t\t\t  }]
\t\t\t\t}],
\t\t\t\tcalculable: true,
\t\t\t\tseries: [{
\t\t\t\t  name: 'Budget vs spending',
\t\t\t\t  type: 'radar',
\t\t\t\t  data: [{
\t\t\t\t\tvalue: [4300, 10000, 28000, 35000, 50000, 19000],
\t\t\t\t\tname: 'Allocated Budget'
\t\t\t\t  }, {
\t\t\t\t\tvalue: [5000, 14000, 28000, 31000, 42000, 21000],
\t\t\t\t\tname: 'Actual Spending'
\t\t\t\t  }]
\t\t\t\t}]
\t\t\t  });

\t\t\t} 
\t\t\t  
\t\t\t   //echart Funnel
\t\t\t  
\t\t\tif (\$('#echart_pyramid').length ){ 
\t\t\t  
\t\t\t  var echartFunnel = echarts.init(document.getElementById('echart_pyramid'), theme);

\t\t\t  echartFunnel.setOption({
\t\t\t\ttitle: {
\t\t\t\t  text: 'Echart Pyramid Graph',
\t\t\t\t  subtext: 'Subtitle'
\t\t\t\t},
\t\t\t\ttooltip: {
\t\t\t\t  trigger: 'item',
\t\t\t\t  formatter: \"{a} <br/>{b} : {c}%\"
\t\t\t\t},
\t\t\t\ttoolbox: {
\t\t\t\t  show: true,
\t\t\t\t  feature: {
\t\t\t\t\trestore: {
\t\t\t\t\t  show: true,
\t\t\t\t\t  title: \"Restore\"
\t\t\t\t\t},
\t\t\t\t\tsaveAsImage: {
\t\t\t\t\t  show: true,
\t\t\t\t\t  title: \"Save Image\"
\t\t\t\t\t}
\t\t\t\t  }
\t\t\t\t},
\t\t\t\tlegend: {
\t\t\t\t  data: ['Something #1', 'Something #2', 'Something #3', 'Something #4', 'Something #5'],
\t\t\t\t  orient: 'vertical',
\t\t\t\t  x: 'left',
\t\t\t\t  y: 'bottom'
\t\t\t\t},
\t\t\t\tcalculable: true,
\t\t\t\tseries: [{
\t\t\t\t  name: '漏斗图',
\t\t\t\t  type: 'funnel',
\t\t\t\t  width: '40%',
\t\t\t\t  data: [{
\t\t\t\t\tvalue: 60,
\t\t\t\t\tname: 'Something #1'
\t\t\t\t  }, {
\t\t\t\t\tvalue: 40,
\t\t\t\t\tname: 'Something #2'
\t\t\t\t  }, {
\t\t\t\t\tvalue: 20,
\t\t\t\t\tname: 'Something #3'
\t\t\t\t  }, {
\t\t\t\t\tvalue: 80,
\t\t\t\t\tname: 'Something #4'
\t\t\t\t  }, {
\t\t\t\t\tvalue: 100,
\t\t\t\t\tname: 'Something #5'
\t\t\t\t  }]
\t\t\t\t}]
\t\t\t  });

\t\t\t} 
\t\t\t  
\t\t\t   //echart Gauge
\t\t\t  
\t\t\tif (\$('#echart_gauge').length ){ 
\t\t\t  
\t\t\t  var echartGauge = echarts.init(document.getElementById('echart_gauge'), theme);

\t\t\t  echartGauge.setOption({
\t\t\t\ttooltip: {
\t\t\t\t  formatter: \"{a} <br/>{b} : {c}%\"
\t\t\t\t},
\t\t\t\ttoolbox: {
\t\t\t\t  show: true,
\t\t\t\t  feature: {
\t\t\t\t\trestore: {
\t\t\t\t\t  show: true,
\t\t\t\t\t  title: \"Restore\"
\t\t\t\t\t},
\t\t\t\t\tsaveAsImage: {
\t\t\t\t\t  show: true,
\t\t\t\t\t  title: \"Save Image\"
\t\t\t\t\t}
\t\t\t\t  }
\t\t\t\t},
\t\t\t\tseries: [{
\t\t\t\t  name: 'Performance',
\t\t\t\t  type: 'gauge',
\t\t\t\t  center: ['50%', '50%'],
\t\t\t\t  startAngle: 140,
\t\t\t\t  endAngle: -140,
\t\t\t\t  min: 0,
\t\t\t\t  max: 100,
\t\t\t\t  precision: 0,
\t\t\t\t  splitNumber: 10,
\t\t\t\t  axisLine: {
\t\t\t\t\tshow: true,
\t\t\t\t\tlineStyle: {
\t\t\t\t\t  color: [
\t\t\t\t\t\t[0.2, 'lightgreen'],
\t\t\t\t\t\t[0.4, 'orange'],
\t\t\t\t\t\t[0.8, 'skyblue'],
\t\t\t\t\t\t[1, '#ff4500']
\t\t\t\t\t  ],
\t\t\t\t\t  width: 30
\t\t\t\t\t}
\t\t\t\t  },
\t\t\t\t  axisTick: {
\t\t\t\t\tshow: true,
\t\t\t\t\tsplitNumber: 5,
\t\t\t\t\tlength: 8,
\t\t\t\t\tlineStyle: {
\t\t\t\t\t  color: '#eee',
\t\t\t\t\t  width: 1,
\t\t\t\t\t  type: 'solid'
\t\t\t\t\t}
\t\t\t\t  },
\t\t\t\t  axisLabel: {
\t\t\t\t\tshow: true,
\t\t\t\t\tformatter: function(v) {
\t\t\t\t\t  switch (v + '') {
\t\t\t\t\t\tcase '10':
\t\t\t\t\t\t  return 'a';
\t\t\t\t\t\tcase '30':
\t\t\t\t\t\t  return 'b';
\t\t\t\t\t\tcase '60':
\t\t\t\t\t\t  return 'c';
\t\t\t\t\t\tcase '90':
\t\t\t\t\t\t  return 'd';
\t\t\t\t\t\tdefault:
\t\t\t\t\t\t  return '';
\t\t\t\t\t  }
\t\t\t\t\t},
\t\t\t\t\ttextStyle: {
\t\t\t\t\t  color: '#333'
\t\t\t\t\t}
\t\t\t\t  },
\t\t\t\t  splitLine: {
\t\t\t\t\tshow: true,
\t\t\t\t\tlength: 30,
\t\t\t\t\tlineStyle: {
\t\t\t\t\t  color: '#eee',
\t\t\t\t\t  width: 2,
\t\t\t\t\t  type: 'solid'
\t\t\t\t\t}
\t\t\t\t  },
\t\t\t\t  pointer: {
\t\t\t\t\tlength: '80%',
\t\t\t\t\twidth: 8,
\t\t\t\t\tcolor: 'auto'
\t\t\t\t  },
\t\t\t\t  title: {
\t\t\t\t\tshow: true,
\t\t\t\t\toffsetCenter: ['-65%', -10],
\t\t\t\t\ttextStyle: {
\t\t\t\t\t  color: '#333',
\t\t\t\t\t  fontSize: 15
\t\t\t\t\t}
\t\t\t\t  },
\t\t\t\t  detail: {
\t\t\t\t\tshow: true,
\t\t\t\t\tbackgroundColor: 'rgba(0,0,0,0)',
\t\t\t\t\tborderWidth: 0,
\t\t\t\t\tborderColor: '#ccc',
\t\t\t\t\twidth: 100,
\t\t\t\t\theight: 40,
\t\t\t\t\toffsetCenter: ['-60%', 10],
\t\t\t\t\tformatter: '{value}%',
\t\t\t\t\ttextStyle: {
\t\t\t\t\t  color: 'auto',
\t\t\t\t\t  fontSize: 30
\t\t\t\t\t}
\t\t\t\t  },
\t\t\t\t  data: [{
\t\t\t\t\tvalue: 50,
\t\t\t\t\tname: 'Performance'
\t\t\t\t  }]
\t\t\t\t}]
\t\t\t  });

\t\t\t} 
\t\t\t  
\t\t\t   //echart Line
\t\t\t  
\t\t\tif (\$('#echart_line').length ){ 
\t\t\t  
\t\t\t  var echartLine = echarts.init(document.getElementById('echart_line'), theme);

\t\t\t  echartLine.setOption({
\t\t\t\ttitle: {
\t\t\t\t  text: 'Line Graph',
\t\t\t\t  subtext: 'Subtitle'
\t\t\t\t},
\t\t\t\ttooltip: {
\t\t\t\t  trigger: 'axis'
\t\t\t\t},
\t\t\t\tlegend: {
\t\t\t\t  x: 220,
\t\t\t\t  y: 40,
\t\t\t\t  data: ['Intent', 'Pre-order', 'Deal']
\t\t\t\t},
\t\t\t\ttoolbox: {
\t\t\t\t  show: true,
\t\t\t\t  feature: {
\t\t\t\t\tmagicType: {
\t\t\t\t\t  show: true,
\t\t\t\t\t  title: {
\t\t\t\t\t\tline: 'Line',
\t\t\t\t\t\tbar: 'Bar',
\t\t\t\t\t\tstack: 'Stack',
\t\t\t\t\t\ttiled: 'Tiled'
\t\t\t\t\t  },
\t\t\t\t\t  type: ['line', 'bar', 'stack', 'tiled']
\t\t\t\t\t},
\t\t\t\t\trestore: {
\t\t\t\t\t  show: true,
\t\t\t\t\t  title: \"Restore\"
\t\t\t\t\t},
\t\t\t\t\tsaveAsImage: {
\t\t\t\t\t  show: true,
\t\t\t\t\t  title: \"Save Image\"
\t\t\t\t\t}
\t\t\t\t  }
\t\t\t\t},
\t\t\t\tcalculable: true,
\t\t\t\txAxis: [{
\t\t\t\t  type: 'category',
\t\t\t\t  boundaryGap: false,
\t\t\t\t  data: ['Mon', 'Tue', 'Wed', 'Thu', 'Fri', 'Sat', 'Sun']
\t\t\t\t}],
\t\t\t\tyAxis: [{
\t\t\t\t  type: 'value'
\t\t\t\t}],
\t\t\t\tseries: [{
\t\t\t\t  name: 'Deal',
\t\t\t\t  type: 'line',
\t\t\t\t  smooth: true,
\t\t\t\t  itemStyle: {
\t\t\t\t\tnormal: {
\t\t\t\t\t  areaStyle: {
\t\t\t\t\t\ttype: 'default'
\t\t\t\t\t  }
\t\t\t\t\t}
\t\t\t\t  },
\t\t\t\t  data: [10, 12, 21, 54, 260, 830, 710]
\t\t\t\t}, {
\t\t\t\t  name: 'Pre-order',
\t\t\t\t  type: 'line',
\t\t\t\t  smooth: true,
\t\t\t\t  itemStyle: {
\t\t\t\t\tnormal: {
\t\t\t\t\t  areaStyle: {
\t\t\t\t\t\ttype: 'default'
\t\t\t\t\t  }
\t\t\t\t\t}
\t\t\t\t  },
\t\t\t\t  data: [30, 182, 434, 791, 390, 30, 10]
\t\t\t\t}, {
\t\t\t\t  name: 'Intent',
\t\t\t\t  type: 'line',
\t\t\t\t  smooth: true,
\t\t\t\t  itemStyle: {
\t\t\t\t\tnormal: {
\t\t\t\t\t  areaStyle: {
\t\t\t\t\t\ttype: 'default'
\t\t\t\t\t  }
\t\t\t\t\t}
\t\t\t\t  },
\t\t\t\t  data: [1320, 1132, 601, 234, 120, 90, 20]
\t\t\t\t}]
\t\t\t  });

\t\t\t} 
\t\t\t  
\t\t\t   //echart Scatter
\t\t\t  
\t\t\tif (\$('#echart_scatter').length ){ 
\t\t\t  
\t\t\t  var echartScatter = echarts.init(document.getElementById('echart_scatter'), theme);

\t\t\t  echartScatter.setOption({
\t\t\t\ttitle: {
\t\t\t\t  text: 'Scatter Graph',
\t\t\t\t  subtext: 'Heinz  2003'
\t\t\t\t},
\t\t\t\ttooltip: {
\t\t\t\t  trigger: 'axis',
\t\t\t\t  showDelay: 0,
\t\t\t\t  axisPointer: {
\t\t\t\t\ttype: 'cross',
\t\t\t\t\tlineStyle: {
\t\t\t\t\t  type: 'dashed',
\t\t\t\t\t  width: 1
\t\t\t\t\t}
\t\t\t\t  }
\t\t\t\t},
\t\t\t\tlegend: {
\t\t\t\t  data: ['Data2', 'Data1']
\t\t\t\t},
\t\t\t\ttoolbox: {
\t\t\t\t  show: true,
\t\t\t\t  feature: {
\t\t\t\t\tsaveAsImage: {
\t\t\t\t\t  show: true,
\t\t\t\t\t  title: \"Save Image\"
\t\t\t\t\t}
\t\t\t\t  }
\t\t\t\t},
\t\t\t\txAxis: [{
\t\t\t\t  type: 'value',
\t\t\t\t  scale: true,
\t\t\t\t  axisLabel: {
\t\t\t\t\tformatter: '{value} cm'
\t\t\t\t  }
\t\t\t\t}],
\t\t\t\tyAxis: [{
\t\t\t\t  type: 'value',
\t\t\t\t  scale: true,
\t\t\t\t  axisLabel: {
\t\t\t\t\tformatter: '{value} kg'
\t\t\t\t  }
\t\t\t\t}],
\t\t\t\tseries: [{
\t\t\t\t  name: 'Data1',
\t\t\t\t  type: 'scatter',
\t\t\t\t  tooltip: {
\t\t\t\t\ttrigger: 'item',
\t\t\t\t\tformatter: function(params) {
\t\t\t\t\t  if (params.value.length > 1) {
\t\t\t\t\t\treturn params.seriesName + ' :<br/>' + params.value[0] + 'cm ' + params.value[1] + 'kg ';
\t\t\t\t\t  } else {
\t\t\t\t\t\treturn params.seriesName + ' :<br/>' + params.name + ' : ' + params.value + 'kg ';
\t\t\t\t\t  }
\t\t\t\t\t}
\t\t\t\t  },
\t\t\t\t  data: [
\t\t\t\t\t[161.2, 51.6],
\t\t\t\t\t[167.5, 59.0],
\t\t\t\t\t[159.5, 49.2],
\t\t\t\t\t[157.0, 63.0],
\t\t\t\t\t[155.8, 53.6],
\t\t\t\t\t[170.0, 59.0],
\t\t\t\t\t[159.1, 47.6],
\t\t\t\t\t[166.0, 69.8],
\t\t\t\t\t[176.2, 66.8],
\t\t\t\t\t[160.2, 75.2],
\t\t\t\t\t[172.5, 55.2],
\t\t\t\t\t[170.9, 54.2],
\t\t\t\t\t[172.9, 62.5],
\t\t\t\t\t[153.4, 42.0],
\t\t\t\t\t[160.0, 50.0],
\t\t\t\t\t[147.2, 49.8],
\t\t\t\t\t[168.2, 49.2],
\t\t\t\t\t[175.0, 73.2],
\t\t\t\t\t[157.0, 47.8],
\t\t\t\t\t[167.6, 68.8],
\t\t\t\t\t[159.5, 50.6],
\t\t\t\t\t[175.0, 82.5],
\t\t\t\t\t[166.8, 57.2],
\t\t\t\t\t[176.5, 87.8],
\t\t\t\t\t[170.2, 72.8],
\t\t\t\t\t[174.0, 54.5],
\t\t\t\t\t[173.0, 59.8],
\t\t\t\t\t[179.9, 67.3],
\t\t\t\t\t[170.5, 67.8],
\t\t\t\t\t[160.0, 47.0],
\t\t\t\t\t[154.4, 46.2],
\t\t\t\t\t[162.0, 55.0],
\t\t\t\t\t[176.5, 83.0],
\t\t\t\t\t[160.0, 54.4],
\t\t\t\t\t[152.0, 45.8],
\t\t\t\t\t[162.1, 53.6],
\t\t\t\t\t[170.0, 73.2],
\t\t\t\t\t[160.2, 52.1],
\t\t\t\t\t[161.3, 67.9],
\t\t\t\t\t[166.4, 56.6],
\t\t\t\t\t[168.9, 62.3],
\t\t\t\t\t[163.8, 58.5],
\t\t\t\t\t[167.6, 54.5],
\t\t\t\t\t[160.0, 50.2],
\t\t\t\t\t[161.3, 60.3],
\t\t\t\t\t[167.6, 58.3],
\t\t\t\t\t[165.1, 56.2],
\t\t\t\t\t[160.0, 50.2],
\t\t\t\t\t[170.0, 72.9],
\t\t\t\t\t[157.5, 59.8],
\t\t\t\t\t[167.6, 61.0],
\t\t\t\t\t[160.7, 69.1],
\t\t\t\t\t[163.2, 55.9],
\t\t\t\t\t[152.4, 46.5],
\t\t\t\t\t[157.5, 54.3],
\t\t\t\t\t[168.3, 54.8],
\t\t\t\t\t[180.3, 60.7],
\t\t\t\t\t[165.5, 60.0],
\t\t\t\t\t[165.0, 62.0],
\t\t\t\t\t[164.5, 60.3],
\t\t\t\t\t[156.0, 52.7],
\t\t\t\t\t[160.0, 74.3],
\t\t\t\t\t[163.0, 62.0],
\t\t\t\t\t[165.7, 73.1],
\t\t\t\t\t[161.0, 80.0],
\t\t\t\t\t[162.0, 54.7],
\t\t\t\t\t[166.0, 53.2],
\t\t\t\t\t[174.0, 75.7],
\t\t\t\t\t[172.7, 61.1],
\t\t\t\t\t[167.6, 55.7],
\t\t\t\t\t[151.1, 48.7],
\t\t\t\t\t[164.5, 52.3],
\t\t\t\t\t[163.5, 50.0],
\t\t\t\t\t[152.0, 59.3],
\t\t\t\t\t[169.0, 62.5],
\t\t\t\t\t[164.0, 55.7],
\t\t\t\t\t[161.2, 54.8],
\t\t\t\t\t[155.0, 45.9],
\t\t\t\t\t[170.0, 70.6],
\t\t\t\t\t[176.2, 67.2],
\t\t\t\t\t[170.0, 69.4],
\t\t\t\t\t[162.5, 58.2],
\t\t\t\t\t[170.3, 64.8],
\t\t\t\t\t[164.1, 71.6],
\t\t\t\t\t[169.5, 52.8],
\t\t\t\t\t[163.2, 59.8],
\t\t\t\t\t[154.5, 49.0],
\t\t\t\t\t[159.8, 50.0],
\t\t\t\t\t[173.2, 69.2],
\t\t\t\t\t[170.0, 55.9],
\t\t\t\t\t[161.4, 63.4],
\t\t\t\t\t[169.0, 58.2],
\t\t\t\t\t[166.2, 58.6],
\t\t\t\t\t[159.4, 45.7],
\t\t\t\t\t[162.5, 52.2],
\t\t\t\t\t[159.0, 48.6],
\t\t\t\t\t[162.8, 57.8],
\t\t\t\t\t[159.0, 55.6],
\t\t\t\t\t[179.8, 66.8],
\t\t\t\t\t[162.9, 59.4],
\t\t\t\t\t[161.0, 53.6],
\t\t\t\t\t[151.1, 73.2],
\t\t\t\t\t[168.2, 53.4],
\t\t\t\t\t[168.9, 69.0],
\t\t\t\t\t[173.2, 58.4],
\t\t\t\t\t[171.8, 56.2],
\t\t\t\t\t[178.0, 70.6],
\t\t\t\t\t[164.3, 59.8],
\t\t\t\t\t[163.0, 72.0],
\t\t\t\t\t[168.5, 65.2],
\t\t\t\t\t[166.8, 56.6],
\t\t\t\t\t[172.7, 105.2],
\t\t\t\t\t[163.5, 51.8],
\t\t\t\t\t[169.4, 63.4],
\t\t\t\t\t[167.8, 59.0],
\t\t\t\t\t[159.5, 47.6],
\t\t\t\t\t[167.6, 63.0],
\t\t\t\t\t[161.2, 55.2],
\t\t\t\t\t[160.0, 45.0],
\t\t\t\t\t[163.2, 54.0],
\t\t\t\t\t[162.2, 50.2],
\t\t\t\t\t[161.3, 60.2],
\t\t\t\t\t[149.5, 44.8],
\t\t\t\t\t[157.5, 58.8],
\t\t\t\t\t[163.2, 56.4],
\t\t\t\t\t[172.7, 62.0],
\t\t\t\t\t[155.0, 49.2],
\t\t\t\t\t[156.5, 67.2],
\t\t\t\t\t[164.0, 53.8],
\t\t\t\t\t[160.9, 54.4],
\t\t\t\t\t[162.8, 58.0],
\t\t\t\t\t[167.0, 59.8],
\t\t\t\t\t[160.0, 54.8],
\t\t\t\t\t[160.0, 43.2],
\t\t\t\t\t[168.9, 60.5],
\t\t\t\t\t[158.2, 46.4],
\t\t\t\t\t[156.0, 64.4],
\t\t\t\t\t[160.0, 48.8],
\t\t\t\t\t[167.1, 62.2],
\t\t\t\t\t[158.0, 55.5],
\t\t\t\t\t[167.6, 57.8],
\t\t\t\t\t[156.0, 54.6],
\t\t\t\t\t[162.1, 59.2],
\t\t\t\t\t[173.4, 52.7],
\t\t\t\t\t[159.8, 53.2],
\t\t\t\t\t[170.5, 64.5],
\t\t\t\t\t[159.2, 51.8],
\t\t\t\t\t[157.5, 56.0],
\t\t\t\t\t[161.3, 63.6],
\t\t\t\t\t[162.6, 63.2],
\t\t\t\t\t[160.0, 59.5],
\t\t\t\t\t[168.9, 56.8],
\t\t\t\t\t[165.1, 64.1],
\t\t\t\t\t[162.6, 50.0],
\t\t\t\t\t[165.1, 72.3],
\t\t\t\t\t[166.4, 55.0],
\t\t\t\t\t[160.0, 55.9],
\t\t\t\t\t[152.4, 60.4],
\t\t\t\t\t[170.2, 69.1],
\t\t\t\t\t[162.6, 84.5],
\t\t\t\t\t[170.2, 55.9],
\t\t\t\t\t[158.8, 55.5],
\t\t\t\t\t[172.7, 69.5],
\t\t\t\t\t[167.6, 76.4],
\t\t\t\t\t[162.6, 61.4],
\t\t\t\t\t[167.6, 65.9],
\t\t\t\t\t[156.2, 58.6],
\t\t\t\t\t[175.2, 66.8],
\t\t\t\t\t[172.1, 56.6],
\t\t\t\t\t[162.6, 58.6],
\t\t\t\t\t[160.0, 55.9],
\t\t\t\t\t[165.1, 59.1],
\t\t\t\t\t[182.9, 81.8],
\t\t\t\t\t[166.4, 70.7],
\t\t\t\t\t[165.1, 56.8],
\t\t\t\t\t[177.8, 60.0],
\t\t\t\t\t[165.1, 58.2],
\t\t\t\t\t[175.3, 72.7],
\t\t\t\t\t[154.9, 54.1],
\t\t\t\t\t[158.8, 49.1],
\t\t\t\t\t[172.7, 75.9],
\t\t\t\t\t[168.9, 55.0],
\t\t\t\t\t[161.3, 57.3],
\t\t\t\t\t[167.6, 55.0],
\t\t\t\t\t[165.1, 65.5],
\t\t\t\t\t[175.3, 65.5],
\t\t\t\t\t[157.5, 48.6],
\t\t\t\t\t[163.8, 58.6],
\t\t\t\t\t[167.6, 63.6],
\t\t\t\t\t[165.1, 55.2],
\t\t\t\t\t[165.1, 62.7],
\t\t\t\t\t[168.9, 56.6],
\t\t\t\t\t[162.6, 53.9],
\t\t\t\t\t[164.5, 63.2],
\t\t\t\t\t[176.5, 73.6],
\t\t\t\t\t[168.9, 62.0],
\t\t\t\t\t[175.3, 63.6],
\t\t\t\t\t[159.4, 53.2],
\t\t\t\t\t[160.0, 53.4],
\t\t\t\t\t[170.2, 55.0],
\t\t\t\t\t[162.6, 70.5],
\t\t\t\t\t[167.6, 54.5],
\t\t\t\t\t[162.6, 54.5],
\t\t\t\t\t[160.7, 55.9],
\t\t\t\t\t[160.0, 59.0],
\t\t\t\t\t[157.5, 63.6],
\t\t\t\t\t[162.6, 54.5],
\t\t\t\t\t[152.4, 47.3],
\t\t\t\t\t[170.2, 67.7],
\t\t\t\t\t[165.1, 80.9],
\t\t\t\t\t[172.7, 70.5],
\t\t\t\t\t[165.1, 60.9],
\t\t\t\t\t[170.2, 63.6],
\t\t\t\t\t[170.2, 54.5],
\t\t\t\t\t[170.2, 59.1],
\t\t\t\t\t[161.3, 70.5],
\t\t\t\t\t[167.6, 52.7],
\t\t\t\t\t[167.6, 62.7],
\t\t\t\t\t[165.1, 86.3],
\t\t\t\t\t[162.6, 66.4],
\t\t\t\t\t[152.4, 67.3],
\t\t\t\t\t[168.9, 63.0],
\t\t\t\t\t[170.2, 73.6],
\t\t\t\t\t[175.2, 62.3],
\t\t\t\t\t[175.2, 57.7],
\t\t\t\t\t[160.0, 55.4],
\t\t\t\t\t[165.1, 104.1],
\t\t\t\t\t[174.0, 55.5],
\t\t\t\t\t[170.2, 77.3],
\t\t\t\t\t[160.0, 80.5],
\t\t\t\t\t[167.6, 64.5],
\t\t\t\t\t[167.6, 72.3],
\t\t\t\t\t[167.6, 61.4],
\t\t\t\t\t[154.9, 58.2],
\t\t\t\t\t[162.6, 81.8],
\t\t\t\t\t[175.3, 63.6],
\t\t\t\t\t[171.4, 53.4],
\t\t\t\t\t[157.5, 54.5],
\t\t\t\t\t[165.1, 53.6],
\t\t\t\t\t[160.0, 60.0],
\t\t\t\t\t[174.0, 73.6],
\t\t\t\t\t[162.6, 61.4],
\t\t\t\t\t[174.0, 55.5],
\t\t\t\t\t[162.6, 63.6],
\t\t\t\t\t[161.3, 60.9],
\t\t\t\t\t[156.2, 60.0],
\t\t\t\t\t[149.9, 46.8],
\t\t\t\t\t[169.5, 57.3],
\t\t\t\t\t[160.0, 64.1],
\t\t\t\t\t[175.3, 63.6],
\t\t\t\t\t[169.5, 67.3],
\t\t\t\t\t[160.0, 75.5],
\t\t\t\t\t[172.7, 68.2],
\t\t\t\t\t[162.6, 61.4],
\t\t\t\t\t[157.5, 76.8],
\t\t\t\t\t[176.5, 71.8],
\t\t\t\t\t[164.4, 55.5],
\t\t\t\t\t[160.7, 48.6],
\t\t\t\t\t[174.0, 66.4],
\t\t\t\t\t[163.8, 67.3]
\t\t\t\t  ],
\t\t\t\t  markPoint: {
\t\t\t\t\tdata: [{
\t\t\t\t\t  type: 'max',
\t\t\t\t\t  name: 'Max'
\t\t\t\t\t}, {
\t\t\t\t\t  type: 'min',
\t\t\t\t\t  name: 'Min'
\t\t\t\t\t}]
\t\t\t\t  },
\t\t\t\t  markLine: {
\t\t\t\t\tdata: [{
\t\t\t\t\t  type: 'average',
\t\t\t\t\t  name: 'Mean'
\t\t\t\t\t}]
\t\t\t\t  }
\t\t\t\t}, {
\t\t\t\t  name: 'Data2',
\t\t\t\t  type: 'scatter',
\t\t\t\t  tooltip: {
\t\t\t\t\ttrigger: 'item',
\t\t\t\t\tformatter: function(params) {
\t\t\t\t\t  if (params.value.length > 1) {
\t\t\t\t\t\treturn params.seriesName + ' :<br/>' + params.value[0] + 'cm ' + params.value[1] + 'kg ';
\t\t\t\t\t  } else {
\t\t\t\t\t\treturn params.seriesName + ' :<br/>' + params.name + ' : ' + params.value + 'kg ';
\t\t\t\t\t  }
\t\t\t\t\t}
\t\t\t\t  },
\t\t\t\t  data: [
\t\t\t\t\t[174.0, 65.6],
\t\t\t\t\t[175.3, 71.8],
\t\t\t\t\t[193.5, 80.7],
\t\t\t\t\t[186.5, 72.6],
\t\t\t\t\t[187.2, 78.8],
\t\t\t\t\t[181.5, 74.8],
\t\t\t\t\t[184.0, 86.4],
\t\t\t\t\t[184.5, 78.4],
\t\t\t\t\t[175.0, 62.0],
\t\t\t\t\t[184.0, 81.6],
\t\t\t\t\t[180.0, 76.6],
\t\t\t\t\t[177.8, 83.6],
\t\t\t\t\t[192.0, 90.0],
\t\t\t\t\t[176.0, 74.6],
\t\t\t\t\t[174.0, 71.0],
\t\t\t\t\t[184.0, 79.6],
\t\t\t\t\t[192.7, 93.8],
\t\t\t\t\t[171.5, 70.0],
\t\t\t\t\t[173.0, 72.4],
\t\t\t\t\t[176.0, 85.9],
\t\t\t\t\t[176.0, 78.8],
\t\t\t\t\t[180.5, 77.8],
\t\t\t\t\t[172.7, 66.2],
\t\t\t\t\t[176.0, 86.4],
\t\t\t\t\t[173.5, 81.8],
\t\t\t\t\t[178.0, 89.6],
\t\t\t\t\t[180.3, 82.8],
\t\t\t\t\t[180.3, 76.4],
\t\t\t\t\t[164.5, 63.2],
\t\t\t\t\t[173.0, 60.9],
\t\t\t\t\t[183.5, 74.8],
\t\t\t\t\t[175.5, 70.0],
\t\t\t\t\t[188.0, 72.4],
\t\t\t\t\t[189.2, 84.1],
\t\t\t\t\t[172.8, 69.1],
\t\t\t\t\t[170.0, 59.5],
\t\t\t\t\t[182.0, 67.2],
\t\t\t\t\t[170.0, 61.3],
\t\t\t\t\t[177.8, 68.6],
\t\t\t\t\t[184.2, 80.1],
\t\t\t\t\t[186.7, 87.8],
\t\t\t\t\t[171.4, 84.7],
\t\t\t\t\t[172.7, 73.4],
\t\t\t\t\t[175.3, 72.1],
\t\t\t\t\t[180.3, 82.6],
\t\t\t\t\t[182.9, 88.7],
\t\t\t\t\t[188.0, 84.1],
\t\t\t\t\t[177.2, 94.1],
\t\t\t\t\t[172.1, 74.9],
\t\t\t\t\t[167.0, 59.1],
\t\t\t\t\t[169.5, 75.6],
\t\t\t\t\t[174.0, 86.2],
\t\t\t\t\t[172.7, 75.3],
\t\t\t\t\t[182.2, 87.1],
\t\t\t\t\t[164.1, 55.2],
\t\t\t\t\t[163.0, 57.0],
\t\t\t\t\t[171.5, 61.4],
\t\t\t\t\t[184.2, 76.8],
\t\t\t\t\t[174.0, 86.8],
\t\t\t\t\t[174.0, 72.2],
\t\t\t\t\t[177.0, 71.6],
\t\t\t\t\t[186.0, 84.8],
\t\t\t\t\t[167.0, 68.2],
\t\t\t\t\t[171.8, 66.1],
\t\t\t\t\t[182.0, 72.0],
\t\t\t\t\t[167.0, 64.6],
\t\t\t\t\t[177.8, 74.8],
\t\t\t\t\t[164.5, 70.0],
\t\t\t\t\t[192.0, 101.6],
\t\t\t\t\t[175.5, 63.2],
\t\t\t\t\t[171.2, 79.1],
\t\t\t\t\t[181.6, 78.9],
\t\t\t\t\t[167.4, 67.7],
\t\t\t\t\t[181.1, 66.0],
\t\t\t\t\t[177.0, 68.2],
\t\t\t\t\t[174.5, 63.9],
\t\t\t\t\t[177.5, 72.0],
\t\t\t\t\t[170.5, 56.8],
\t\t\t\t\t[182.4, 74.5],
\t\t\t\t\t[197.1, 90.9],
\t\t\t\t\t[180.1, 93.0],
\t\t\t\t\t[175.5, 80.9],
\t\t\t\t\t[180.6, 72.7],
\t\t\t\t\t[184.4, 68.0],
\t\t\t\t\t[175.5, 70.9],
\t\t\t\t\t[180.6, 72.5],
\t\t\t\t\t[177.0, 72.5],
\t\t\t\t\t[177.1, 83.4],
\t\t\t\t\t[181.6, 75.5],
\t\t\t\t\t[176.5, 73.0],
\t\t\t\t\t[175.0, 70.2],
\t\t\t\t\t[174.0, 73.4],
\t\t\t\t\t[165.1, 70.5],
\t\t\t\t\t[177.0, 68.9],
\t\t\t\t\t[192.0, 102.3],
\t\t\t\t\t[176.5, 68.4],
\t\t\t\t\t[169.4, 65.9],
\t\t\t\t\t[182.1, 75.7],
\t\t\t\t\t[179.8, 84.5],
\t\t\t\t\t[175.3, 87.7],
\t\t\t\t\t[184.9, 86.4],
\t\t\t\t\t[177.3, 73.2],
\t\t\t\t\t[167.4, 53.9],
\t\t\t\t\t[178.1, 72.0],
\t\t\t\t\t[168.9, 55.5],
\t\t\t\t\t[157.2, 58.4],
\t\t\t\t\t[180.3, 83.2],
\t\t\t\t\t[170.2, 72.7],
\t\t\t\t\t[177.8, 64.1],
\t\t\t\t\t[172.7, 72.3],
\t\t\t\t\t[165.1, 65.0],
\t\t\t\t\t[186.7, 86.4],
\t\t\t\t\t[165.1, 65.0],
\t\t\t\t\t[174.0, 88.6],
\t\t\t\t\t[175.3, 84.1],
\t\t\t\t\t[185.4, 66.8],
\t\t\t\t\t[177.8, 75.5],
\t\t\t\t\t[180.3, 93.2],
\t\t\t\t\t[180.3, 82.7],
\t\t\t\t\t[177.8, 58.0],
\t\t\t\t\t[177.8, 79.5],
\t\t\t\t\t[177.8, 78.6],
\t\t\t\t\t[177.8, 71.8],
\t\t\t\t\t[177.8, 116.4],
\t\t\t\t\t[163.8, 72.2],
\t\t\t\t\t[188.0, 83.6],
\t\t\t\t\t[198.1, 85.5],
\t\t\t\t\t[175.3, 90.9],
\t\t\t\t\t[166.4, 85.9],
\t\t\t\t\t[190.5, 89.1],
\t\t\t\t\t[166.4, 75.0],
\t\t\t\t\t[177.8, 77.7],
\t\t\t\t\t[179.7, 86.4],
\t\t\t\t\t[172.7, 90.9],
\t\t\t\t\t[190.5, 73.6],
\t\t\t\t\t[185.4, 76.4],
\t\t\t\t\t[168.9, 69.1],
\t\t\t\t\t[167.6, 84.5],
\t\t\t\t\t[175.3, 64.5],
\t\t\t\t\t[170.2, 69.1],
\t\t\t\t\t[190.5, 108.6],
\t\t\t\t\t[177.8, 86.4],
\t\t\t\t\t[190.5, 80.9],
\t\t\t\t\t[177.8, 87.7],
\t\t\t\t\t[184.2, 94.5],
\t\t\t\t\t[176.5, 80.2],
\t\t\t\t\t[177.8, 72.0],
\t\t\t\t\t[180.3, 71.4],
\t\t\t\t\t[171.4, 72.7],
\t\t\t\t\t[172.7, 84.1],
\t\t\t\t\t[172.7, 76.8],
\t\t\t\t\t[177.8, 63.6],
\t\t\t\t\t[177.8, 80.9],
\t\t\t\t\t[182.9, 80.9],
\t\t\t\t\t[170.2, 85.5],
\t\t\t\t\t[167.6, 68.6],
\t\t\t\t\t[175.3, 67.7],
\t\t\t\t\t[165.1, 66.4],
\t\t\t\t\t[185.4, 102.3],
\t\t\t\t\t[181.6, 70.5],
\t\t\t\t\t[172.7, 95.9],
\t\t\t\t\t[190.5, 84.1],
\t\t\t\t\t[179.1, 87.3],
\t\t\t\t\t[175.3, 71.8],
\t\t\t\t\t[170.2, 65.9],
\t\t\t\t\t[193.0, 95.9],
\t\t\t\t\t[171.4, 91.4],
\t\t\t\t\t[177.8, 81.8],
\t\t\t\t\t[177.8, 96.8],
\t\t\t\t\t[167.6, 69.1],
\t\t\t\t\t[167.6, 82.7],
\t\t\t\t\t[180.3, 75.5],
\t\t\t\t\t[182.9, 79.5],
\t\t\t\t\t[176.5, 73.6],
\t\t\t\t\t[186.7, 91.8],
\t\t\t\t\t[188.0, 84.1],
\t\t\t\t\t[188.0, 85.9],
\t\t\t\t\t[177.8, 81.8],
\t\t\t\t\t[174.0, 82.5],
\t\t\t\t\t[177.8, 80.5],
\t\t\t\t\t[171.4, 70.0],
\t\t\t\t\t[185.4, 81.8],
\t\t\t\t\t[185.4, 84.1],
\t\t\t\t\t[188.0, 90.5],
\t\t\t\t\t[188.0, 91.4],
\t\t\t\t\t[182.9, 89.1],
\t\t\t\t\t[176.5, 85.0],
\t\t\t\t\t[175.3, 69.1],
\t\t\t\t\t[175.3, 73.6],
\t\t\t\t\t[188.0, 80.5],
\t\t\t\t\t[188.0, 82.7],
\t\t\t\t\t[175.3, 86.4],
\t\t\t\t\t[170.5, 67.7],
\t\t\t\t\t[179.1, 92.7],
\t\t\t\t\t[177.8, 93.6],
\t\t\t\t\t[175.3, 70.9],
\t\t\t\t\t[182.9, 75.0],
\t\t\t\t\t[170.8, 93.2],
\t\t\t\t\t[188.0, 93.2],
\t\t\t\t\t[180.3, 77.7],
\t\t\t\t\t[177.8, 61.4],
\t\t\t\t\t[185.4, 94.1],
\t\t\t\t\t[168.9, 75.0],
\t\t\t\t\t[185.4, 83.6],
\t\t\t\t\t[180.3, 85.5],
\t\t\t\t\t[174.0, 73.9],
\t\t\t\t\t[167.6, 66.8],
\t\t\t\t\t[182.9, 87.3],
\t\t\t\t\t[160.0, 72.3],
\t\t\t\t\t[180.3, 88.6],
\t\t\t\t\t[167.6, 75.5],
\t\t\t\t\t[186.7, 101.4],
\t\t\t\t\t[175.3, 91.1],
\t\t\t\t\t[175.3, 67.3],
\t\t\t\t\t[175.9, 77.7],
\t\t\t\t\t[175.3, 81.8],
\t\t\t\t\t[179.1, 75.5],
\t\t\t\t\t[181.6, 84.5],
\t\t\t\t\t[177.8, 76.6],
\t\t\t\t\t[182.9, 85.0],
\t\t\t\t\t[177.8, 102.5],
\t\t\t\t\t[184.2, 77.3],
\t\t\t\t\t[179.1, 71.8],
\t\t\t\t\t[176.5, 87.9],
\t\t\t\t\t[188.0, 94.3],
\t\t\t\t\t[174.0, 70.9],
\t\t\t\t\t[167.6, 64.5],
\t\t\t\t\t[170.2, 77.3],
\t\t\t\t\t[167.6, 72.3],
\t\t\t\t\t[188.0, 87.3],
\t\t\t\t\t[174.0, 80.0],
\t\t\t\t\t[176.5, 82.3],
\t\t\t\t\t[180.3, 73.6],
\t\t\t\t\t[167.6, 74.1],
\t\t\t\t\t[188.0, 85.9],
\t\t\t\t\t[180.3, 73.2],
\t\t\t\t\t[167.6, 76.3],
\t\t\t\t\t[183.0, 65.9],
\t\t\t\t\t[183.0, 90.9],
\t\t\t\t\t[179.1, 89.1],
\t\t\t\t\t[170.2, 62.3],
\t\t\t\t\t[177.8, 82.7],
\t\t\t\t\t[179.1, 79.1],
\t\t\t\t\t[190.5, 98.2],
\t\t\t\t\t[177.8, 84.1],
\t\t\t\t\t[180.3, 83.2],
\t\t\t\t\t[180.3, 83.2]
\t\t\t\t  ],
\t\t\t\t  markPoint: {
\t\t\t\t\tdata: [{
\t\t\t\t\t  type: 'max',
\t\t\t\t\t  name: 'Max'
\t\t\t\t\t}, {
\t\t\t\t\t  type: 'min',
\t\t\t\t\t  name: 'Min'
\t\t\t\t\t}]
\t\t\t\t  },
\t\t\t\t  markLine: {
\t\t\t\t\tdata: [{
\t\t\t\t\t  type: 'average',
\t\t\t\t\t  name: 'Mean'
\t\t\t\t\t}]
\t\t\t\t  }
\t\t\t\t}]
\t\t\t  });

\t\t\t} 
\t\t\t  
\t\t\t   //echart Bar Horizontal
\t\t\t  
\t\t\tif (\$('#echart_bar_horizontal').length ){ 
\t\t\t  
\t\t\t  var echartBar = echarts.init(document.getElementById('echart_bar_horizontal'), theme);

\t\t\t  echartBar.setOption({
\t\t\t\ttitle: {
\t\t\t\t  text: 'Bar Graph',
\t\t\t\t  subtext: 'Graph subtitle'
\t\t\t\t},
\t\t\t\ttooltip: {
\t\t\t\t  trigger: 'axis'
\t\t\t\t},
\t\t\t\tlegend: {
\t\t\t\t  x: 100,
\t\t\t\t  data: ['2015', '2016']
\t\t\t\t},
\t\t\t\ttoolbox: {
\t\t\t\t  show: true,
\t\t\t\t  feature: {
\t\t\t\t\tsaveAsImage: {
\t\t\t\t\t  show: true,
\t\t\t\t\t  title: \"Save Image\"
\t\t\t\t\t}
\t\t\t\t  }
\t\t\t\t},
\t\t\t\tcalculable: true,
\t\t\t\txAxis: [{
\t\t\t\t  type: 'value',
\t\t\t\t  boundaryGap: [0, 0.01]
\t\t\t\t}],
\t\t\t\tyAxis: [{
\t\t\t\t  type: 'category',
\t\t\t\t  data: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun']
\t\t\t\t}],
\t\t\t\tseries: [{
\t\t\t\t  name: '2015',
\t\t\t\t  type: 'bar',
\t\t\t\t  data: [18203, 23489, 29034, 104970, 131744, 630230]
\t\t\t\t}, {
\t\t\t\t  name: '2016',
\t\t\t\t  type: 'bar',
\t\t\t\t  data: [19325, 23438, 31000, 121594, 134141, 681807]
\t\t\t\t}]

\t\t\t  });

\t\t\t} 
\t\t\t  
\t\t\t   //echart Pie Collapse
\t\t\t  
\t\t\tif (\$('#echart_pie2').length ){ 
\t\t\t  
\t\t\t  var echartPieCollapse = echarts.init(document.getElementById('echart_pie2'), theme);
\t\t\t  
\t\t\t  echartPieCollapse.setOption({
\t\t\t\ttooltip: {
\t\t\t\t  trigger: 'item',
\t\t\t\t  formatter: \"{a} <br/>{b} : {c} ({d}%)\"
\t\t\t\t},
\t\t\t\tlegend: {
\t\t\t\t  x: 'center',
\t\t\t\t  y: 'bottom',
\t\t\t\t  data: ['rose1', 'rose2', 'rose3', 'rose4', 'rose5', 'rose6']
\t\t\t\t},
\t\t\t\ttoolbox: {
\t\t\t\t  show: true,
\t\t\t\t  feature: {
\t\t\t\t\tmagicType: {
\t\t\t\t\t  show: true,
\t\t\t\t\t  type: ['pie', 'funnel']
\t\t\t\t\t},
\t\t\t\t\trestore: {
\t\t\t\t\t  show: true,
\t\t\t\t\t  title: \"Restore\"
\t\t\t\t\t},
\t\t\t\t\tsaveAsImage: {
\t\t\t\t\t  show: true,
\t\t\t\t\t  title: \"Save Image\"
\t\t\t\t\t}
\t\t\t\t  }
\t\t\t\t},
\t\t\t\tcalculable: true,
\t\t\t\tseries: [{
\t\t\t\t  name: 'Area Mode',
\t\t\t\t  type: 'pie',
\t\t\t\t  radius: [25, 90],
\t\t\t\t  center: ['50%', 170],
\t\t\t\t  roseType: 'area',
\t\t\t\t  x: '50%',
\t\t\t\t  max: 40,
\t\t\t\t  sort: 'ascending',
\t\t\t\t  data: [{
\t\t\t\t\tvalue: 10,
\t\t\t\t\tname: 'rose1'
\t\t\t\t  }, {
\t\t\t\t\tvalue: 5,
\t\t\t\t\tname: 'rose2'
\t\t\t\t  }, {
\t\t\t\t\tvalue: 15,
\t\t\t\t\tname: 'rose3'
\t\t\t\t  }, {
\t\t\t\t\tvalue: 25,
\t\t\t\t\tname: 'rose4'
\t\t\t\t  }, {
\t\t\t\t\tvalue: 20,
\t\t\t\t\tname: 'rose5'
\t\t\t\t  }, {
\t\t\t\t\tvalue: 35,
\t\t\t\t\tname: 'rose6'
\t\t\t\t  }]
\t\t\t\t}]
\t\t\t  });

\t\t\t} 
\t\t\t  
\t\t\t   //echart Donut
\t\t\t  
\t\t\tif (\$('#echart_donut').length ){  
\t\t\t  
\t\t\t  var echartDonut = echarts.init(document.getElementById('echart_donut'), theme);
\t\t\t  
\t\t\t  echartDonut.setOption({
\t\t\t\ttooltip: {
\t\t\t\t  trigger: 'item',
\t\t\t\t  formatter: \"{a} <br/>{b} : {c} ({d}%)\"
\t\t\t\t},
\t\t\t\tcalculable: true,
\t\t\t\tlegend: {
\t\t\t\t  x: 'center',
\t\t\t\t  y: 'bottom',
\t\t\t\t  data: ['Direct Access', 'E-mail Marketing', 'Union Ad', 'Video Ads', 'Search Engine']
\t\t\t\t},
\t\t\t\ttoolbox: {
\t\t\t\t  show: true,
\t\t\t\t  feature: {
\t\t\t\t\tmagicType: {
\t\t\t\t\t  show: true,
\t\t\t\t\t  type: ['pie', 'funnel'],
\t\t\t\t\t  option: {
\t\t\t\t\t\tfunnel: {
\t\t\t\t\t\t  x: '25%',
\t\t\t\t\t\t  width: '50%',
\t\t\t\t\t\t  funnelAlign: 'center',
\t\t\t\t\t\t  max: 1548
\t\t\t\t\t\t}
\t\t\t\t\t  }
\t\t\t\t\t},
\t\t\t\t\trestore: {
\t\t\t\t\t  show: true,
\t\t\t\t\t  title: \"Restore\"
\t\t\t\t\t},
\t\t\t\t\tsaveAsImage: {
\t\t\t\t\t  show: true,
\t\t\t\t\t  title: \"Save Image\"
\t\t\t\t\t}
\t\t\t\t  }
\t\t\t\t},
\t\t\t\tseries: [{
\t\t\t\t  name: 'Access to the resource',
\t\t\t\t  type: 'pie',
\t\t\t\t  radius: ['35%', '55%'],
\t\t\t\t  itemStyle: {
\t\t\t\t\tnormal: {
\t\t\t\t\t  label: {
\t\t\t\t\t\tshow: true
\t\t\t\t\t  },
\t\t\t\t\t  labelLine: {
\t\t\t\t\t\tshow: true
\t\t\t\t\t  }
\t\t\t\t\t},
\t\t\t\t\temphasis: {
\t\t\t\t\t  label: {
\t\t\t\t\t\tshow: true,
\t\t\t\t\t\tposition: 'center',
\t\t\t\t\t\ttextStyle: {
\t\t\t\t\t\t  fontSize: '14',
\t\t\t\t\t\t  fontWeight: 'normal'
\t\t\t\t\t\t}
\t\t\t\t\t  }
\t\t\t\t\t}
\t\t\t\t  },
\t\t\t\t  data: [{
\t\t\t\t\tvalue: 335,
\t\t\t\t\tname: 'Direct Access'
\t\t\t\t  }, {
\t\t\t\t\tvalue: 310,
\t\t\t\t\tname: 'E-mail Marketing'
\t\t\t\t  }, {
\t\t\t\t\tvalue: 234,
\t\t\t\t\tname: 'Union Ad'
\t\t\t\t  }, {
\t\t\t\t\tvalue: 135,
\t\t\t\t\tname: 'Video Ads'
\t\t\t\t  }, {
\t\t\t\t\tvalue: 1548,
\t\t\t\t\tname: 'Search Engine'
\t\t\t\t  }]
\t\t\t\t}]
\t\t\t  });

\t\t\t} 
\t\t\t  
\t\t\t   //echart Pie
\t\t\t  
\t\t\tif (\$('#echart_pie').length ){  
\t\t\t  
\t\t\t  var echartPie = echarts.init(document.getElementById('echart_pie'), theme);

\t\t\t  echartPie.setOption({
\t\t\t\ttooltip: {
\t\t\t\t  trigger: 'item',
\t\t\t\t  formatter: \"{a} <br/>{b} : {c} ({d}%)\"
\t\t\t\t},
\t\t\t\tlegend: {
\t\t\t\t  x: 'center',
\t\t\t\t  y: 'bottom',
\t\t\t\t  data: ['Direct Access', 'E-mail Marketing', 'Union Ad', 'Video Ads', 'Search Engine']
\t\t\t\t},
\t\t\t\ttoolbox: {
\t\t\t\t  show: true,
\t\t\t\t  feature: {
\t\t\t\t\tmagicType: {
\t\t\t\t\t  show: true,
\t\t\t\t\t  type: ['pie', 'funnel'],
\t\t\t\t\t  option: {
\t\t\t\t\t\tfunnel: {
\t\t\t\t\t\t  x: '25%',
\t\t\t\t\t\t  width: '50%',
\t\t\t\t\t\t  funnelAlign: 'left',
\t\t\t\t\t\t  max: 1548
\t\t\t\t\t\t}
\t\t\t\t\t  }
\t\t\t\t\t},
\t\t\t\t\trestore: {
\t\t\t\t\t  show: true,
\t\t\t\t\t  title: \"Restore\"
\t\t\t\t\t},
\t\t\t\t\tsaveAsImage: {
\t\t\t\t\t  show: true,
\t\t\t\t\t  title: \"Save Image\"
\t\t\t\t\t}
\t\t\t\t  }
\t\t\t\t},
\t\t\t\tcalculable: true,
\t\t\t\tseries: [{
\t\t\t\t  name: '访问来源',
\t\t\t\t  type: 'pie',
\t\t\t\t  radius: '55%',
\t\t\t\t  center: ['50%', '48%'],
\t\t\t\t  data: [{
\t\t\t\t\tvalue: 335,
\t\t\t\t\tname: 'Direct Access'
\t\t\t\t  }, {
\t\t\t\t\tvalue: 310,
\t\t\t\t\tname: 'E-mail Marketing'
\t\t\t\t  }, {
\t\t\t\t\tvalue: 234,
\t\t\t\t\tname: 'Union Ad'
\t\t\t\t  }, {
\t\t\t\t\tvalue: 135,
\t\t\t\t\tname: 'Video Ads'
\t\t\t\t  }, {
\t\t\t\t\tvalue: 1548,
\t\t\t\t\tname: 'Search Engine'
\t\t\t\t  }]
\t\t\t\t}]
\t\t\t  });

\t\t\t  var dataStyle = {
\t\t\t\tnormal: {
\t\t\t\t  label: {
\t\t\t\t\tshow: false
\t\t\t\t  },
\t\t\t\t  labelLine: {
\t\t\t\t\tshow: false
\t\t\t\t  }
\t\t\t\t}
\t\t\t  };

\t\t\t  var placeHolderStyle = {
\t\t\t\tnormal: {
\t\t\t\t  color: 'rgba(0,0,0,0)',
\t\t\t\t  label: {
\t\t\t\t\tshow: false
\t\t\t\t  },
\t\t\t\t  labelLine: {
\t\t\t\t\tshow: false
\t\t\t\t  }
\t\t\t\t},
\t\t\t\temphasis: {
\t\t\t\t  color: 'rgba(0,0,0,0)'
\t\t\t\t}
\t\t\t  };

\t\t\t} 
\t\t\t  
\t\t\t   //echart Mini Pie
\t\t\t  
\t\t\tif (\$('#echart_mini_pie').length ){ 
\t\t\t  
\t\t\t  var echartMiniPie = echarts.init(document.getElementById('echart_mini_pie'), theme);

\t\t\t  echartMiniPie .setOption({
\t\t\t\ttitle: {
\t\t\t\t  text: 'Chart #2',
\t\t\t\t  subtext: 'From ExcelHome',
\t\t\t\t  sublink: 'http://e.weibo.com/1341556070/AhQXtjbqh',
\t\t\t\t  x: 'center',
\t\t\t\t  y: 'center',
\t\t\t\t  itemGap: 20,
\t\t\t\t  textStyle: {
\t\t\t\t\tcolor: 'rgba(30,144,255,0.8)',
\t\t\t\t\tfontFamily: '微软雅黑',
\t\t\t\t\tfontSize: 35,
\t\t\t\t\tfontWeight: 'bolder'
\t\t\t\t  }
\t\t\t\t},
\t\t\t\ttooltip: {
\t\t\t\t  show: true,
\t\t\t\t  formatter: \"{a} <br/>{b} : {c} ({d}%)\"
\t\t\t\t},
\t\t\t\tlegend: {
\t\t\t\t  orient: 'vertical',
\t\t\t\t  x: 170,
\t\t\t\t  y: 45,
\t\t\t\t  itemGap: 12,
\t\t\t\t  data: ['68%Something #1', '29%Something #2', '3%Something #3'],
\t\t\t\t},
\t\t\t\ttoolbox: {
\t\t\t\t  show: true,
\t\t\t\t  feature: {
\t\t\t\t\tmark: {
\t\t\t\t\t  show: true
\t\t\t\t\t},
\t\t\t\t\tdataView: {
\t\t\t\t\t  show: true,
\t\t\t\t\t  title: \"Text View\",
\t\t\t\t\t  lang: [
\t\t\t\t\t\t\"Text View\",
\t\t\t\t\t\t\"Close\",
\t\t\t\t\t\t\"Refresh\",
\t\t\t\t\t  ],
\t\t\t\t\t  readOnly: false
\t\t\t\t\t},
\t\t\t\t\trestore: {
\t\t\t\t\t  show: true,
\t\t\t\t\t  title: \"Restore\"
\t\t\t\t\t},
\t\t\t\t\tsaveAsImage: {
\t\t\t\t\t  show: true,
\t\t\t\t\t  title: \"Save Image\"
\t\t\t\t\t}
\t\t\t\t  }
\t\t\t\t},
\t\t\t\tseries: [{
\t\t\t\t  name: '1',
\t\t\t\t  type: 'pie',
\t\t\t\t  clockWise: false,
\t\t\t\t  radius: [105, 130],
\t\t\t\t  itemStyle: dataStyle,
\t\t\t\t  data: [{
\t\t\t\t\tvalue: 68,
\t\t\t\t\tname: '68%Something #1'
\t\t\t\t  }, {
\t\t\t\t\tvalue: 32,
\t\t\t\t\tname: 'invisible',
\t\t\t\t\titemStyle: placeHolderStyle
\t\t\t\t  }]
\t\t\t\t}, {
\t\t\t\t  name: '2',
\t\t\t\t  type: 'pie',
\t\t\t\t  clockWise: false,
\t\t\t\t  radius: [80, 105],
\t\t\t\t  itemStyle: dataStyle,
\t\t\t\t  data: [{
\t\t\t\t\tvalue: 29,
\t\t\t\t\tname: '29%Something #2'
\t\t\t\t  }, {
\t\t\t\t\tvalue: 71,
\t\t\t\t\tname: 'invisible',
\t\t\t\t\titemStyle: placeHolderStyle
\t\t\t\t  }]
\t\t\t\t}, {
\t\t\t\t  name: '3',
\t\t\t\t  type: 'pie',
\t\t\t\t  clockWise: false,
\t\t\t\t  radius: [25, 80],
\t\t\t\t  itemStyle: dataStyle,
\t\t\t\t  data: [{
\t\t\t\t\tvalue: 3,
\t\t\t\t\tname: '3%Something #3'
\t\t\t\t  }, {
\t\t\t\t\tvalue: 97,
\t\t\t\t\tname: 'invisible',
\t\t\t\t\titemStyle: placeHolderStyle
\t\t\t\t  }]
\t\t\t\t}]
\t\t\t  });

\t\t\t} 
\t\t\t  
\t\t\t   //echart Map
\t\t\t  
\t\t\tif (\$('#echart_world_map').length ){ 
\t\t\t  
\t\t\t\t  var echartMap = echarts.init(document.getElementById('echart_world_map'), theme);
\t\t\t\t  
\t\t\t\t   
\t\t\t\t  echartMap.setOption({
\t\t\t\t\ttitle: {
\t\t\t\t\t  text: 'World Population (2010)',
\t\t\t\t\t  subtext: 'from United Nations, Total population, both sexes combined, as of 1 July (thousands)',
\t\t\t\t\t  x: 'center',
\t\t\t\t\t  y: 'top'
\t\t\t\t\t},
\t\t\t\t\ttooltip: {
\t\t\t\t\t  trigger: 'item',
\t\t\t\t\t  formatter: function(params) {
\t\t\t\t\t\tvar value = (params.value + '').split('.');
\t\t\t\t\t\tvalue = value[0].replace(/(\\d{1,3})(?=(?:\\d{3})+(?!\\d))/g, '\$1,') + '.' + value[1];
\t\t\t\t\t\treturn params.seriesName + '<br/>' + params.name + ' : ' + value;
\t\t\t\t\t  }
\t\t\t\t\t},
\t\t\t\t\ttoolbox: {
\t\t\t\t\t  show: true,
\t\t\t\t\t  orient: 'vertical',
\t\t\t\t\t  x: 'right',
\t\t\t\t\t  y: 'center',
\t\t\t\t\t  feature: {
\t\t\t\t\t\tmark: {
\t\t\t\t\t\t  show: true
\t\t\t\t\t\t},
\t\t\t\t\t\tdataView: {
\t\t\t\t\t\t  show: true,
\t\t\t\t\t\t  title: \"Text View\",
\t\t\t\t\t\t  lang: [
\t\t\t\t\t\t\t\"Text View\",
\t\t\t\t\t\t\t\"Close\",
\t\t\t\t\t\t\t\"Refresh\",
\t\t\t\t\t\t  ],
\t\t\t\t\t\t  readOnly: false
\t\t\t\t\t\t},
\t\t\t\t\t\trestore: {
\t\t\t\t\t\t  show: true,
\t\t\t\t\t\t  title: \"Restore\"
\t\t\t\t\t\t},
\t\t\t\t\t\tsaveAsImage: {
\t\t\t\t\t\t  show: true,
\t\t\t\t\t\t  title: \"Save Image\"
\t\t\t\t\t\t}
\t\t\t\t\t  }
\t\t\t\t\t},
\t\t\t\t\tdataRange: {
\t\t\t\t\t  min: 0,
\t\t\t\t\t  max: 1000000,

\t\t\t\t\t  text: ['High', 'Low'],
\t\t\t\t\t  realtime: false,
\t\t\t\t\t  calculable: true,
\t\t\t\t\t  color: ['#087E65', '#26B99A', '#CBEAE3']
\t\t\t\t\t},
\t\t\t\t\tseries: [{
\t\t\t\t\t  name: 'World Population (2010)',
\t\t\t\t\t  type: 'map',
\t\t\t\t\t  mapType: 'world',
\t\t\t\t\t  roam: false,
\t\t\t\t\t  mapLocation: {
\t\t\t\t\t\ty: 60
\t\t\t\t\t  },
\t\t\t\t\t  itemStyle: {
\t\t\t\t\t\temphasis: {
\t\t\t\t\t\t  label: {
\t\t\t\t\t\t\tshow: true
\t\t\t\t\t\t  }
\t\t\t\t\t\t}
\t\t\t\t\t  },
\t\t\t\t\t  data: [{
\t\t\t\t\t\tname: 'Afghanistan',
\t\t\t\t\t\tvalue: 28397.812
\t\t\t\t\t  }, {
\t\t\t\t\t\tname: 'Angola',
\t\t\t\t\t\tvalue: 19549.124
\t\t\t\t\t  }, {
\t\t\t\t\t\tname: 'Albania',
\t\t\t\t\t\tvalue: 3150.143
\t\t\t\t\t  }, {
\t\t\t\t\t\tname: 'United Arab Emirates',
\t\t\t\t\t\tvalue: 8441.537
\t\t\t\t\t  }, {
\t\t\t\t\t\tname: 'Argentina',
\t\t\t\t\t\tvalue: 40374.224
\t\t\t\t\t  }, {
\t\t\t\t\t\tname: 'Armenia',
\t\t\t\t\t\tvalue: 2963.496
\t\t\t\t\t  }, {
\t\t\t\t\t\tname: 'French Southern and Antarctic Lands',
\t\t\t\t\t\tvalue: 268.065
\t\t\t\t\t  }, {
\t\t\t\t\t\tname: 'Australia',
\t\t\t\t\t\tvalue: 22404.488
\t\t\t\t\t  }, {
\t\t\t\t\t\tname: 'Austria',
\t\t\t\t\t\tvalue: 8401.924
\t\t\t\t\t  }, {
\t\t\t\t\t\tname: 'Azerbaijan',
\t\t\t\t\t\tvalue: 9094.718
\t\t\t\t\t  }, {
\t\t\t\t\t\tname: 'Burundi',
\t\t\t\t\t\tvalue: 9232.753
\t\t\t\t\t  }, {
\t\t\t\t\t\tname: 'Belgium',
\t\t\t\t\t\tvalue: 10941.288
\t\t\t\t\t  }, {
\t\t\t\t\t\tname: 'Benin',
\t\t\t\t\t\tvalue: 9509.798
\t\t\t\t\t  }, {
\t\t\t\t\t\tname: 'Burkina Faso',
\t\t\t\t\t\tvalue: 15540.284
\t\t\t\t\t  }, {
\t\t\t\t\t\tname: 'Bangladesh',
\t\t\t\t\t\tvalue: 151125.475
\t\t\t\t\t  }, {
\t\t\t\t\t\tname: 'Bulgaria',
\t\t\t\t\t\tvalue: 7389.175
\t\t\t\t\t  }, {
\t\t\t\t\t\tname: 'The Bahamas',
\t\t\t\t\t\tvalue: 66402.316
\t\t\t\t\t  }, {
\t\t\t\t\t\tname: 'Bosnia and Herzegovina',
\t\t\t\t\t\tvalue: 3845.929
\t\t\t\t\t  }, {
\t\t\t\t\t\tname: 'Belarus',
\t\t\t\t\t\tvalue: 9491.07
\t\t\t\t\t  }, {
\t\t\t\t\t\tname: 'Belize',
\t\t\t\t\t\tvalue: 308.595
\t\t\t\t\t  }, {
\t\t\t\t\t\tname: 'Bermuda',
\t\t\t\t\t\tvalue: 64.951
\t\t\t\t\t  }, {
\t\t\t\t\t\tname: 'Bolivia',
\t\t\t\t\t\tvalue: 716.939
\t\t\t\t\t  }, {
\t\t\t\t\t\tname: 'Brazil',
\t\t\t\t\t\tvalue: 195210.154
\t\t\t\t\t  }, {
\t\t\t\t\t\tname: 'Brunei',
\t\t\t\t\t\tvalue: 27.223
\t\t\t\t\t  }, {
\t\t\t\t\t\tname: 'Bhutan',
\t\t\t\t\t\tvalue: 716.939
\t\t\t\t\t  }, {
\t\t\t\t\t\tname: 'Botswana',
\t\t\t\t\t\tvalue: 1969.341
\t\t\t\t\t  }, {
\t\t\t\t\t\tname: 'Central African Republic',
\t\t\t\t\t\tvalue: 4349.921
\t\t\t\t\t  }, {
\t\t\t\t\t\tname: 'Canada',
\t\t\t\t\t\tvalue: 34126.24
\t\t\t\t\t  }, {
\t\t\t\t\t\tname: 'Switzerland',
\t\t\t\t\t\tvalue: 7830.534
\t\t\t\t\t  }, {
\t\t\t\t\t\tname: 'Chile',
\t\t\t\t\t\tvalue: 17150.76
\t\t\t\t\t  }, {
\t\t\t\t\t\tname: 'China',
\t\t\t\t\t\tvalue: 1359821.465
\t\t\t\t\t  }, {
\t\t\t\t\t\tname: 'Ivory Coast',
\t\t\t\t\t\tvalue: 60508.978
\t\t\t\t\t  }, {
\t\t\t\t\t\tname: 'Cameroon',
\t\t\t\t\t\tvalue: 20624.343
\t\t\t\t\t  }, {
\t\t\t\t\t\tname: 'Democratic Republic of the Congo',
\t\t\t\t\t\tvalue: 62191.161
\t\t\t\t\t  }, {
\t\t\t\t\t\tname: 'Republic of the Congo',
\t\t\t\t\t\tvalue: 3573.024
\t\t\t\t\t  }, {
\t\t\t\t\t\tname: 'Colombia',
\t\t\t\t\t\tvalue: 46444.798
\t\t\t\t\t  }, {
\t\t\t\t\t\tname: 'Costa Rica',
\t\t\t\t\t\tvalue: 4669.685
\t\t\t\t\t  }, {
\t\t\t\t\t\tname: 'Cuba',
\t\t\t\t\t\tvalue: 11281.768
\t\t\t\t\t  }, {
\t\t\t\t\t\tname: 'Northern Cyprus',
\t\t\t\t\t\tvalue: 1.468
\t\t\t\t\t  }, {
\t\t\t\t\t\tname: 'Cyprus',
\t\t\t\t\t\tvalue: 1103.685
\t\t\t\t\t  }, {
\t\t\t\t\t\tname: 'Czech Republic',
\t\t\t\t\t\tvalue: 10553.701
\t\t\t\t\t  }, {
\t\t\t\t\t\tname: 'Germany',
\t\t\t\t\t\tvalue: 83017.404
\t\t\t\t\t  }, {
\t\t\t\t\t\tname: 'Djibouti',
\t\t\t\t\t\tvalue: 834.036
\t\t\t\t\t  }, {
\t\t\t\t\t\tname: 'Denmark',
\t\t\t\t\t\tvalue: 5550.959
\t\t\t\t\t  }, {
\t\t\t\t\t\tname: 'Dominican Republic',
\t\t\t\t\t\tvalue: 10016.797
\t\t\t\t\t  }, {
\t\t\t\t\t\tname: 'Algeria',
\t\t\t\t\t\tvalue: 37062.82
\t\t\t\t\t  }, {
\t\t\t\t\t\tname: 'Ecuador',
\t\t\t\t\t\tvalue: 15001.072
\t\t\t\t\t  }, {
\t\t\t\t\t\tname: 'Egypt',
\t\t\t\t\t\tvalue: 78075.705
\t\t\t\t\t  }, {
\t\t\t\t\t\tname: 'Eritrea',
\t\t\t\t\t\tvalue: 5741.159
\t\t\t\t\t  }, {
\t\t\t\t\t\tname: 'Spain',
\t\t\t\t\t\tvalue: 46182.038
\t\t\t\t\t  }, {
\t\t\t\t\t\tname: 'Estonia',
\t\t\t\t\t\tvalue: 1298.533
\t\t\t\t\t  }, {
\t\t\t\t\t\tname: 'Ethiopia',
\t\t\t\t\t\tvalue: 87095.281
\t\t\t\t\t  }, {
\t\t\t\t\t\tname: 'Finland',
\t\t\t\t\t\tvalue: 5367.693
\t\t\t\t\t  }, {
\t\t\t\t\t\tname: 'Fiji',
\t\t\t\t\t\tvalue: 860.559
\t\t\t\t\t  }, {
\t\t\t\t\t\tname: 'Falkland Islands',
\t\t\t\t\t\tvalue: 49.581
\t\t\t\t\t  }, {
\t\t\t\t\t\tname: 'France',
\t\t\t\t\t\tvalue: 63230.866
\t\t\t\t\t  }, {
\t\t\t\t\t\tname: 'Gabon',
\t\t\t\t\t\tvalue: 1556.222
\t\t\t\t\t  }, {
\t\t\t\t\t\tname: 'United Kingdom',
\t\t\t\t\t\tvalue: 62066.35
\t\t\t\t\t  }, {
\t\t\t\t\t\tname: 'Georgia',
\t\t\t\t\t\tvalue: 4388.674
\t\t\t\t\t  }, {
\t\t\t\t\t\tname: 'Ghana',
\t\t\t\t\t\tvalue: 24262.901
\t\t\t\t\t  }, {
\t\t\t\t\t\tname: 'Guinea',
\t\t\t\t\t\tvalue: 10876.033
\t\t\t\t\t  }, {
\t\t\t\t\t\tname: 'Gambia',
\t\t\t\t\t\tvalue: 1680.64
\t\t\t\t\t  }, {
\t\t\t\t\t\tname: 'Guinea Bissau',
\t\t\t\t\t\tvalue: 10876.033
\t\t\t\t\t  }, {
\t\t\t\t\t\tname: 'Equatorial Guinea',
\t\t\t\t\t\tvalue: 696.167
\t\t\t\t\t  }, {
\t\t\t\t\t\tname: 'Greece',
\t\t\t\t\t\tvalue: 11109.999
\t\t\t\t\t  }, {
\t\t\t\t\t\tname: 'Greenland',
\t\t\t\t\t\tvalue: 56.546
\t\t\t\t\t  }, {
\t\t\t\t\t\tname: 'Guatemala',
\t\t\t\t\t\tvalue: 14341.576
\t\t\t\t\t  }, {
\t\t\t\t\t\tname: 'French Guiana',
\t\t\t\t\t\tvalue: 231.169
\t\t\t\t\t  }, {
\t\t\t\t\t\tname: 'Guyana',
\t\t\t\t\t\tvalue: 786.126
\t\t\t\t\t  }, {
\t\t\t\t\t\tname: 'Honduras',
\t\t\t\t\t\tvalue: 7621.204
\t\t\t\t\t  }, {
\t\t\t\t\t\tname: 'Croatia',
\t\t\t\t\t\tvalue: 4338.027
\t\t\t\t\t  }, {
\t\t\t\t\t\tname: 'Haiti',
\t\t\t\t\t\tvalue: 9896.4
\t\t\t\t\t  }, {
\t\t\t\t\t\tname: 'Hungary',
\t\t\t\t\t\tvalue: 10014.633
\t\t\t\t\t  }, {
\t\t\t\t\t\tname: 'Indonesia',
\t\t\t\t\t\tvalue: 240676.485
\t\t\t\t\t  }, {
\t\t\t\t\t\tname: 'India',
\t\t\t\t\t\tvalue: 1205624.648
\t\t\t\t\t  }, {
\t\t\t\t\t\tname: 'Ireland',
\t\t\t\t\t\tvalue: 4467.561
\t\t\t\t\t  }, {
\t\t\t\t\t\tname: 'Iran',
\t\t\t\t\t\tvalue: 240676.485
\t\t\t\t\t  }, {
\t\t\t\t\t\tname: 'Iraq',
\t\t\t\t\t\tvalue: 30962.38
\t\t\t\t\t  }, {
\t\t\t\t\t\tname: 'Iceland',
\t\t\t\t\t\tvalue: 318.042
\t\t\t\t\t  }, {
\t\t\t\t\t\tname: 'Israel',
\t\t\t\t\t\tvalue: 7420.368
\t\t\t\t\t  }, {
\t\t\t\t\t\tname: 'Italy',
\t\t\t\t\t\tvalue: 60508.978
\t\t\t\t\t  }, {
\t\t\t\t\t\tname: 'Jamaica',
\t\t\t\t\t\tvalue: 2741.485
\t\t\t\t\t  }, {
\t\t\t\t\t\tname: 'Jordan',
\t\t\t\t\t\tvalue: 6454.554
\t\t\t\t\t  }, {
\t\t\t\t\t\tname: 'Japan',
\t\t\t\t\t\tvalue: 127352.833
\t\t\t\t\t  }, {
\t\t\t\t\t\tname: 'Kazakhstan',
\t\t\t\t\t\tvalue: 15921.127
\t\t\t\t\t  }, {
\t\t\t\t\t\tname: 'Kenya',
\t\t\t\t\t\tvalue: 40909.194
\t\t\t\t\t  }, {
\t\t\t\t\t\tname: 'Kyrgyzstan',
\t\t\t\t\t\tvalue: 5334.223
\t\t\t\t\t  }, {
\t\t\t\t\t\tname: 'Cambodia',
\t\t\t\t\t\tvalue: 14364.931
\t\t\t\t\t  }, {
\t\t\t\t\t\tname: 'South Korea',
\t\t\t\t\t\tvalue: 51452.352
\t\t\t\t\t  }, {
\t\t\t\t\t\tname: 'Kosovo',
\t\t\t\t\t\tvalue: 97.743
\t\t\t\t\t  }, {
\t\t\t\t\t\tname: 'Kuwait',
\t\t\t\t\t\tvalue: 2991.58
\t\t\t\t\t  }, {
\t\t\t\t\t\tname: 'Laos',
\t\t\t\t\t\tvalue: 6395.713
\t\t\t\t\t  }, {
\t\t\t\t\t\tname: 'Lebanon',
\t\t\t\t\t\tvalue: 4341.092
\t\t\t\t\t  }, {
\t\t\t\t\t\tname: 'Liberia',
\t\t\t\t\t\tvalue: 3957.99
\t\t\t\t\t  }, {
\t\t\t\t\t\tname: 'Libya',
\t\t\t\t\t\tvalue: 6040.612
\t\t\t\t\t  }, {
\t\t\t\t\t\tname: 'Sri Lanka',
\t\t\t\t\t\tvalue: 20758.779
\t\t\t\t\t  }, {
\t\t\t\t\t\tname: 'Lesotho',
\t\t\t\t\t\tvalue: 2008.921
\t\t\t\t\t  }, {
\t\t\t\t\t\tname: 'Lithuania',
\t\t\t\t\t\tvalue: 3068.457
\t\t\t\t\t  }, {
\t\t\t\t\t\tname: 'Luxembourg',
\t\t\t\t\t\tvalue: 507.885
\t\t\t\t\t  }, {
\t\t\t\t\t\tname: 'Latvia',
\t\t\t\t\t\tvalue: 2090.519
\t\t\t\t\t  }, {
\t\t\t\t\t\tname: 'Morocco',
\t\t\t\t\t\tvalue: 31642.36
\t\t\t\t\t  }, {
\t\t\t\t\t\tname: 'Moldova',
\t\t\t\t\t\tvalue: 103.619
\t\t\t\t\t  }, {
\t\t\t\t\t\tname: 'Madagascar',
\t\t\t\t\t\tvalue: 21079.532
\t\t\t\t\t  }, {
\t\t\t\t\t\tname: 'Mexico',
\t\t\t\t\t\tvalue: 117886.404
\t\t\t\t\t  }, {
\t\t\t\t\t\tname: 'Macedonia',
\t\t\t\t\t\tvalue: 507.885
\t\t\t\t\t  }, {
\t\t\t\t\t\tname: 'Mali',
\t\t\t\t\t\tvalue: 13985.961
\t\t\t\t\t  }, {
\t\t\t\t\t\tname: 'Myanmar',
\t\t\t\t\t\tvalue: 51931.231
\t\t\t\t\t  }, {
\t\t\t\t\t\tname: 'Montenegro',
\t\t\t\t\t\tvalue: 620.078
\t\t\t\t\t  }, {
\t\t\t\t\t\tname: 'Mongolia',
\t\t\t\t\t\tvalue: 2712.738
\t\t\t\t\t  }, {
\t\t\t\t\t\tname: 'Mozambique',
\t\t\t\t\t\tvalue: 23967.265
\t\t\t\t\t  }, {
\t\t\t\t\t\tname: 'Mauritania',
\t\t\t\t\t\tvalue: 3609.42
\t\t\t\t\t  }, {
\t\t\t\t\t\tname: 'Malawi',
\t\t\t\t\t\tvalue: 15013.694
\t\t\t\t\t  }, {
\t\t\t\t\t\tname: 'Malaysia',
\t\t\t\t\t\tvalue: 28275.835
\t\t\t\t\t  }, {
\t\t\t\t\t\tname: 'Namibia',
\t\t\t\t\t\tvalue: 2178.967
\t\t\t\t\t  }, {
\t\t\t\t\t\tname: 'New Caledonia',
\t\t\t\t\t\tvalue: 246.379
\t\t\t\t\t  }, {
\t\t\t\t\t\tname: 'Niger',
\t\t\t\t\t\tvalue: 15893.746
\t\t\t\t\t  }, {
\t\t\t\t\t\tname: 'Nigeria',
\t\t\t\t\t\tvalue: 159707.78
\t\t\t\t\t  }, {
\t\t\t\t\t\tname: 'Nicaragua',
\t\t\t\t\t\tvalue: 5822.209
\t\t\t\t\t  }, {
\t\t\t\t\t\tname: 'Netherlands',
\t\t\t\t\t\tvalue: 16615.243
\t\t\t\t\t  }, {
\t\t\t\t\t\tname: 'Norway',
\t\t\t\t\t\tvalue: 4891.251
\t\t\t\t\t  }, {
\t\t\t\t\t\tname: 'Nepal',
\t\t\t\t\t\tvalue: 26846.016
\t\t\t\t\t  }, {
\t\t\t\t\t\tname: 'New Zealand',
\t\t\t\t\t\tvalue: 4368.136
\t\t\t\t\t  }, {
\t\t\t\t\t\tname: 'Oman',
\t\t\t\t\t\tvalue: 2802.768
\t\t\t\t\t  }, {
\t\t\t\t\t\tname: 'Pakistan',
\t\t\t\t\t\tvalue: 173149.306
\t\t\t\t\t  }, {
\t\t\t\t\t\tname: 'Panama',
\t\t\t\t\t\tvalue: 3678.128
\t\t\t\t\t  }, {
\t\t\t\t\t\tname: 'Peru',
\t\t\t\t\t\tvalue: 29262.83
\t\t\t\t\t  }, {
\t\t\t\t\t\tname: 'Philippines',
\t\t\t\t\t\tvalue: 93444.322
\t\t\t\t\t  }, {
\t\t\t\t\t\tname: 'Papua New Guinea',
\t\t\t\t\t\tvalue: 6858.945
\t\t\t\t\t  }, {
\t\t\t\t\t\tname: 'Poland',
\t\t\t\t\t\tvalue: 38198.754
\t\t\t\t\t  }, {
\t\t\t\t\t\tname: 'Puerto Rico',
\t\t\t\t\t\tvalue: 3709.671
\t\t\t\t\t  }, {
\t\t\t\t\t\tname: 'North Korea',
\t\t\t\t\t\tvalue: 1.468
\t\t\t\t\t  }, {
\t\t\t\t\t\tname: 'Portugal',
\t\t\t\t\t\tvalue: 10589.792
\t\t\t\t\t  }, {
\t\t\t\t\t\tname: 'Paraguay',
\t\t\t\t\t\tvalue: 6459.721
\t\t\t\t\t  }, {
\t\t\t\t\t\tname: 'Qatar',
\t\t\t\t\t\tvalue: 1749.713
\t\t\t\t\t  }, {
\t\t\t\t\t\tname: 'Romania',
\t\t\t\t\t\tvalue: 21861.476
\t\t\t\t\t  }, {
\t\t\t\t\t\tname: 'Russia',
\t\t\t\t\t\tvalue: 21861.476
\t\t\t\t\t  }, {
\t\t\t\t\t\tname: 'Rwanda',
\t\t\t\t\t\tvalue: 10836.732
\t\t\t\t\t  }, {
\t\t\t\t\t\tname: 'Western Sahara',
\t\t\t\t\t\tvalue: 514.648
\t\t\t\t\t  }, {
\t\t\t\t\t\tname: 'Saudi Arabia',
\t\t\t\t\t\tvalue: 27258.387
\t\t\t\t\t  }, {
\t\t\t\t\t\tname: 'Sudan',
\t\t\t\t\t\tvalue: 35652.002
\t\t\t\t\t  }, {
\t\t\t\t\t\tname: 'South Sudan',
\t\t\t\t\t\tvalue: 9940.929
\t\t\t\t\t  }, {
\t\t\t\t\t\tname: 'Senegal',
\t\t\t\t\t\tvalue: 12950.564
\t\t\t\t\t  }, {
\t\t\t\t\t\tname: 'Solomon Islands',
\t\t\t\t\t\tvalue: 526.447
\t\t\t\t\t  }, {
\t\t\t\t\t\tname: 'Sierra Leone',
\t\t\t\t\t\tvalue: 5751.976
\t\t\t\t\t  }, {
\t\t\t\t\t\tname: 'El Salvador',
\t\t\t\t\t\tvalue: 6218.195
\t\t\t\t\t  }, {
\t\t\t\t\t\tname: 'Somaliland',
\t\t\t\t\t\tvalue: 9636.173
\t\t\t\t\t  }, {
\t\t\t\t\t\tname: 'Somalia',
\t\t\t\t\t\tvalue: 9636.173
\t\t\t\t\t  }, {
\t\t\t\t\t\tname: 'Republic of Serbia',
\t\t\t\t\t\tvalue: 3573.024
\t\t\t\t\t  }, {
\t\t\t\t\t\tname: 'Suriname',
\t\t\t\t\t\tvalue: 524.96
\t\t\t\t\t  }, {
\t\t\t\t\t\tname: 'Slovakia',
\t\t\t\t\t\tvalue: 5433.437
\t\t\t\t\t  }, {
\t\t\t\t\t\tname: 'Slovenia',
\t\t\t\t\t\tvalue: 2054.232
\t\t\t\t\t  }, {
\t\t\t\t\t\tname: 'Sweden',
\t\t\t\t\t\tvalue: 9382.297
\t\t\t\t\t  }, {
\t\t\t\t\t\tname: 'Swaziland',
\t\t\t\t\t\tvalue: 1193.148
\t\t\t\t\t  }, {
\t\t\t\t\t\tname: 'Syria',
\t\t\t\t\t\tvalue: 7830.534
\t\t\t\t\t  }, {
\t\t\t\t\t\tname: 'Chad',
\t\t\t\t\t\tvalue: 11720.781
\t\t\t\t\t  }, {
\t\t\t\t\t\tname: 'Togo',
\t\t\t\t\t\tvalue: 6306.014
\t\t\t\t\t  }, {
\t\t\t\t\t\tname: 'Thailand',
\t\t\t\t\t\tvalue: 66402.316
\t\t\t\t\t  }, {
\t\t\t\t\t\tname: 'Tajikistan',
\t\t\t\t\t\tvalue: 7627.326
\t\t\t\t\t  }, {
\t\t\t\t\t\tname: 'Turkmenistan',
\t\t\t\t\t\tvalue: 5041.995
\t\t\t\t\t  }, {
\t\t\t\t\t\tname: 'East Timor',
\t\t\t\t\t\tvalue: 10016.797
\t\t\t\t\t  }, {
\t\t\t\t\t\tname: 'Trinidad and Tobago',
\t\t\t\t\t\tvalue: 1328.095
\t\t\t\t\t  }, {
\t\t\t\t\t\tname: 'Tunisia',
\t\t\t\t\t\tvalue: 10631.83
\t\t\t\t\t  }, {
\t\t\t\t\t\tname: 'Turkey',
\t\t\t\t\t\tvalue: 72137.546
\t\t\t\t\t  }, {
\t\t\t\t\t\tname: 'United Republic of Tanzania',
\t\t\t\t\t\tvalue: 44973.33
\t\t\t\t\t  }, {
\t\t\t\t\t\tname: 'Uganda',
\t\t\t\t\t\tvalue: 33987.213
\t\t\t\t\t  }, {
\t\t\t\t\t\tname: 'Ukraine',
\t\t\t\t\t\tvalue: 46050.22
\t\t\t\t\t  }, {
\t\t\t\t\t\tname: 'Uruguay',
\t\t\t\t\t\tvalue: 3371.982
\t\t\t\t\t  }, {
\t\t\t\t\t\tname: 'United States of America',
\t\t\t\t\t\tvalue: 312247.116
\t\t\t\t\t  }, {
\t\t\t\t\t\tname: 'Uzbekistan',
\t\t\t\t\t\tvalue: 27769.27
\t\t\t\t\t  }, {
\t\t\t\t\t\tname: 'Venezuela',
\t\t\t\t\t\tvalue: 236.299
\t\t\t\t\t  }, {
\t\t\t\t\t\tname: 'Vietnam',
\t\t\t\t\t\tvalue: 89047.397
\t\t\t\t\t  }, {
\t\t\t\t\t\tname: 'Vanuatu',
\t\t\t\t\t\tvalue: 236.299
\t\t\t\t\t  }, {
\t\t\t\t\t\tname: 'West Bank',
\t\t\t\t\t\tvalue: 13.565
\t\t\t\t\t  }, {
\t\t\t\t\t\tname: 'Yemen',
\t\t\t\t\t\tvalue: 22763.008
\t\t\t\t\t  }, {
\t\t\t\t\t\tname: 'South Africa',
\t\t\t\t\t\tvalue: 51452.352
\t\t\t\t\t  }, {
\t\t\t\t\t\tname: 'Zambia',
\t\t\t\t\t\tvalue: 13216.985
\t\t\t\t\t  }, {
\t\t\t\t\t\tname: 'Zimbabwe',
\t\t\t\t\t\tvalue: 13076.978
\t\t\t\t\t  }]
\t\t\t\t\t}]
\t\t\t\t  });
\t   
\t\t\t}
\t   
\t\t}  
\t   
\t   
\t\$(document).ready(function() {
\t\t\t\t
\t\tinit_sparklines();
\t\tinit_flot_chart();
\t\tinit_sidebar();
\t\tinit_wysiwyg();
\t\tinit_InputMask();
\t\tinit_JQVmap();
\t\tinit_cropper();
\t\tinit_knob();
\t\tinit_IonRangeSlider();
\t\tinit_ColorPicker();
\t\tinit_TagsInput();
\t\tinit_parsley();
\t\tinit_daterangepicker();
\t\tinit_daterangepicker_right();
\t\tinit_daterangepicker_single_call();
\t\tinit_daterangepicker_reservation();
\t\tinit_SmartWizard();
\t\tinit_EasyPieChart();
\t\tinit_charts();
\t\tinit_echarts();
\t\tinit_morris_charts();
\t\tinit_skycons();
\t\tinit_select2();
\t\tinit_validator();
\t\tinit_DataTables();
\t\tinit_chart_doughnut();
\t\tinit_gauge();
\t\tinit_PNotify();
\t\tinit_starrr();
\t\tinit_calendar();
\t\tinit_compose();
\t\tinit_CustomNotification();
\t\tinit_autosize();
\t\tinit_autocomplete();
\t\t\t\t

\t});
</script>
";
    }

    public function getTemplateName()
    {
        return "default/layout/footer.js.tpl";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  140 => 96,  136 => 95,  110 => 72,  49 => 14,  45 => 13,  41 => 12,  33 => 7,  29 => 6,  25 => 5,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "default/layout/footer.js.tpl", "C:\\xampp\\htdocs\\ameis\\main\\template\\default\\layout\\footer.js.tpl");
    }
}
