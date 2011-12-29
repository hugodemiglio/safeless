<?php

if(isset($_GET['css'])):

?>
*
{
    margin: 0 auto;
    padding: 0;
}

body
{
    background: #f7f7f7;
    font: normal 12pt sans-serif;
    color: #333;
}

a
{
    color: #333;
}
a:hover
{
    color: #666;
}

h1
{
    font-size: 250%;
}
h2
{
    font-size: 200%;
}

ul
{
    margin-left: 25px;
}
    ul li
    {
        list-style-type: square;
    }

form {}
  form fieldset
  {
    border: 0;
    margin-left: 20px;
  }
  form label
  {
    width: 100px;
    margin-top: 10px;
    text-transform: lowercase;
    font-weight: bold;
    font-size: 130%;
    color: #d34949;
    float: left;
    clear: both;
  }
  form input,
  form select
  {
    outline: none;
    border: 1px solid #e5e5e5;
    background: #fff;
    margin: 15px 0 0 20px;
    float: left;
    
  }
  form input[type=text],
  form input[tyé=password]
  {
    padding: 3px;
  }
  form .radio
  {
    margin: 15px 0 0 20px;
    float: left;
  }
    form .radio label,
    form .radio input,
    form .radio select
    {
      width: auto;
      margin: 0;
      text-transform: none;
      float: none;
    }
    form .radio label
    {
      font-size: 85%;
      color: #333;
    }
  form .button
  {
    margin-top: 20px;
    text-align: right;
    clear: both;
  }
    form .button button
    {
      	padding: 3px 10px;
    }



/* Debug */
.debug
{
  border-radius: 5px;
  border: 1px dotted #ccc;
  background: #f7f7f7;
  padding: 10px 15px 15px;
  margin: 5px 0 25px;
}
  .debug span
  {
    font-size: 20px;
    text-align: right;
    color: #ccc;
    display: block;
    cursor: pointer;
  }
  .debug #show-debug
  {
    display: none;
  }
/* Debug (Finish) */

/* Clear Fix */
.ClearFix
{
    display: block;
    clear: both;
}
/* Clear Fix (Finish) */

/* No Margin */
ul.NoMargin
{
    margin: 0;
}
    ul.NoMargin li
    {
        list-style-type: none;
        list-style-image: none;
    }
/* No Margin (Finish) */

/* Dialog */
.dialog
{
    border: 1px solid #333;
    border-radius: 5px;
    background: #eee;
    margin: 10px 0;
    padding: 5px;
    font-size: 75%;
}
  .dialog .options
  {
    margin-top: 5px;
    text-align: right;
  }
.dialog.ok
{
    border-color: #9c0;
    background: #e9ffa6;
}
.dialog.alert
{
    border-color: #fc0;
    background: #fff4a6;
}
.dialog.error
{
    border-color: #900;
    background: #ffbbbb;
}
/* Dialog */

/* Breadcrumb */
.breadcrumb
{
  border-radius: 5px;
  background: #ffc;
  margin: 5px 0;
  padding: 5px;
}
  .breadcrumb ul {}
    .breadcrumb ul li
    {
      margin-right: 5px;
      float: left;
      display: block;
    }
      .breadcrumb ul li a
      {
        border-radius: 5px;
        background: #fc0;
        padding: 2px 5px;
        font-weight: bold;
        text-decoration: none;
        display: block;
        color: #fff;
      }
      .breadcrumb ul li a:hover
      {
        background: #ffdf60;
      }
/* Breadcrumb (Finish) */

/* File Manager */
table.FileManager
{
    border: 1px solid #ccc;
    border-radius: 5px;
    width: 100%;
    margin: 5px 0;
    font-size: 75%;
}
        table.FileManager thead th
        {
            border-bottom: 1px solid #ccc;
            padding: 3px 5px;
            text-transform: lowercase;
            text-align: left;
        }
        table.FileManager thead th.FileName
        {
            width: 375px;
        }
        table.FileManager thead th.FileSize
        {
            width: 100px;
            text-align: center;
        }
        table.FileManager thead th.FileOptions
        {
            width: 180px;
        }
            table.FileManager tbody tr td
            {
                border-bottom: 1px solid #e7e7e7;
                padding: 6px;
            }
                table.FileManager tbody tr td a
                {
                    text-decoration: none;
                }
            table.FileManager tbody tr.Zebra td
            {
                background: #f7f7f7;
            }
            table.FileManager tbody tr:last-child td
            {
                border-bottom: 0;
            }
            table.FileManager tbody tr:hover td
            {
                background: #d7e6f2;
            }
            table.FileManager tbody tr td span.color
            {
                border-radius: 3px;
                padding: 2px 5px;
                color: #fff;
            }
            
            table.FileManager tbody tr td span.color.normal { background: #09f; }
            table.FileManager tbody tr td span.color.folder { background: #fc0; }
            table.FileManager tbody tr td span.color.safeless { background: #F40000; }
            table.FileManager tbody tr td span.color.hidden { background: #ccc; }
            
            table.FileManager tbody tr td.FileName
            {
                font-weight: bold;
            }
            table.FileManager tbody tr td.FileSize
            {
                text-align: center;
            }
                table.FileManager tbody tr td ul.Options
                {
                    width: 170px;
                    margin: 0;
                    float: right;
                }
                    table.FileManager tbody tr td ul.Options li
                    {
                        list-style-type: none;
                        list-style-image: none;
                        margin-left: 10px;
                        text-transform: lowercase;
                        float: left;
                        display: block;
                    }
                        table.FileManager tbody tr td ul.Options li a
                        {
                            text-decoration: none;
                            display: none;
                            color: #4a8fd3;
                        }
                        table.FileManager tbody tr td ul.Options li a:hover
                        {
                            text-decoration: underline;
                        }
                        table.FileManager tbody tr:hover td ul.Options li a
                        {
                            display: block;
                        }
/* File Manager (Finish) */

/* File View */
.content
{
  border: 1px solid #ccc;
  background: #f7f7f7;
  padding: 3px;
  max-height: 500px;
  overflow: auto;
  font-size: 85%;
}
/* File View (Finish) */

#container
{
    width: 996px;
}
#header
{
    margin: 15px 0;
}
    #header #logo
    {
        width: 161px;
        float: left;
    }
        #header #logo h1
        {
            text-shadow: 0 1px 1px #333;
            color: #f5f5f5;
        }
        #header #logo h2
        {
            top: -5px;
            position: relative;
            font-size: 70%;
            font-weight: normal;
            text-align: right;
            color: #aaa;
        }
#content
{}
    #content h2,
    #content h3
    {
        font-size: 150%;
        text-transform: lowercase;
        letter-spacing: -2px;
    }
    #content h2
    {
        color: #4a8fd3;
    }
    #content h3
    {
        font-size: 125%;
        color: #ccc;
    }
    #content #sidebar
    {
        width: 250px;
        float: left;
    }
        #content #sidebar ul#navigation
        {
            border: 1px solid #cdcdcd;
            border-radius: 5px;
            background: #fff;
        }
            #content #sidebar ul#navigation li
            {
                font-size: 90%;
            }
                #content #sidebar ul#navigation li a
                {
                    border-top: 1px solid #ddd;
                    padding: 5px;
                    text-decoration: none;
                    display: block;
                }
                #content #sidebar ul#navigation li a:hover
                {
                    background: #d7e6f2;
                    color: #4a8fd3;
                }
                #content #sidebar ul#navigation li a.this
                {
                    color: #4a8fd3;
                }
                #content #sidebar ul#navigation li.first a
                {
                    border-top: none;
                }
    #content #pages
    {
        border: 1px solid #cdcdcd;
        border-radius: 5px;
        background: #fff;
        width: 715px;
        padding: 5px 10px;
        float: right;
    }
#footer
{
    margin: 25px 0;
    font-size: 80%;
    text-align: center;
    color: #999;
}
<?php

exit;
endif;

?>