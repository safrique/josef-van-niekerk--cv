@extends('cv.base.base')

@section('style')

<!-- <link rel="stylesheet" href="{{ asset('/assets/adminlte/dist/css/adminlte.min.css') }}"> -->

<style scoped>
        /*
        ---------------------------------------------------------------------------------
            STRIPPED DOWN RESUME TEMPLATE
            html resume

            v0.9: 5/28/09

            design and code by: thingsthatarebrown.com 
                                (matt brown)
        ---------------------------------------------------------------------------------
        */


        .msg { padding: 10px; background: #222; position: relative; }
        .msg h1 { color: #fff;  }
        .msg a { margin-left: 20px; background: #408814; color: white; padding: 4px 8px; text-decoration: none; }
        .msg a:hover { background: #266400; }

        /* //-- yui-grids style overrides -- */
        body { font-family: Georgia; color: #444; }
        #inner { padding: 10px 80px; margin: auto; max-width:720px; background: #f5f5f5; border: solid #666; border-width: 8px 0 2px 0; }
        #innerDownload { padding: 10px 80px; margin: auto; max-width:720px; }
        .yui-gf { margin-bottom: 2em; padding-bottom: 2em; border-bottom: 1px solid #ccc; }

        /* //-- header, body, footer -- */
        #hd { margin: 2.5em 0 3em 0; padding-bottom: 1.5em; border-bottom: 1px solid #ccc }
        #hd h2 { text-transform: uppercase; letter-spacing: 2px; }
        #bd, #ft { margin-bottom: 2em; }

        /* //-- footer -- */
        #ft { padding: 1em 0 5em 0; font-size: 92%; border-top: 1px solid #ccc; text-align: center; }
        #ft p { margin-bottom: 0; text-align: center;   }

        /* //-- core typography and style -- */
        #hd h1 { font-size: 48px; text-transform: uppercase; letter-spacing: 3px; }
        h2 { font-size: 152% }
        h3, h4 { font-size: 122%; }
        h1, h2, h3, h4 { color: #333; }
        p { font-size: 100%; line-height: 18px; padding-right: 3em; }
        a { color: #990003 }
        a:hover { text-decoration: none; }
        strong { font-weight: bold; }
        li { line-height: 24px; border-bottom: 1px solid #ccc; }
        p.enlarge { font-size: 144%; padding-right: 6.5em; line-height: 24px; }
        p.enlarge span { color: #000 }
        .contact-info { margin-top: 7px; }
        .first h2 { font-style: italic; }
        .last { border-bottom: 0 }


        /* //-- section styles -- */

        a#pdf { display: block; float: left; background: #666; color: white; padding: 6px 50px 6px 12px; margin-bottom: 6px; text-decoration: none;  }
        a#pdf:hover { background: #222; }

        .cfield { position: relative; margin-bottom: 1em; padding-bottom: 1em; border-bottom: 1px solid #ccc; }
        .cfield p { margin: 0.75em 0 3em 0; }

        .last { border: none; }

        #srt-ttab { margin-bottom: 100px; text-align: center;  }
        #srt-ttab img.last { margin-top: 20px }

        /* --// override to force 1/8th width grids -- */
        .yui-gf .yui-u{width:80.2%;}
        .yui-gf div.first{width:12.3%;}

        .image {width: 50%; max-width:50%}
</style>
@endsection
@section('header')
	<title>First Template</title>
	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<meta name="keywords" content="" />
	<meta name="description" content="" />
@endsection
@section('content')
<cv-template-first><cv-template-first>
@endsection