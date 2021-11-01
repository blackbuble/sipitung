<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Sunday Invoice Email</title>
  <!-- Designed by https://github.com/kaytcat -->
  <!-- Header image designed by Freepik.com -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.css">	

  <style type="text/css">
  /* Take care of image borders and formatting */

  img { max-width: 600px; outline: none; text-decoration: none; -ms-interpolation-mode: bicubic;}
  a img { border: none; }
  table { border-collapse: collapse !important; }
  #outlook a { padding:0; }
  .ReadMsgBody { width: 100%; }
  .ExternalClass {width:100%;}
  .backgroundTable {margin:0 auto; padding:0; width:100% !important;}
  table td {border-collapse: collapse;}
  .ExternalClass * {line-height: 115%;}


  /* General styling */

  td {
    font-family: Arial, sans-serif;
    color: #6f6f6f;
  }

  body {
    -webkit-font-smoothing:antialiased;
    -webkit-text-size-adjust:none;
    width: 100%;
    height: 100%;
    color: #6f6f6f;
    font-weight: 400;
    font-size: 18px;
  }


  h1 {
    margin: 10px 0;
  }

  a {
    color: #8365e2;
    text-decoration: none;
  }

  .force-full-width {
    width: 100% !important;
  }

  .force-width-80 {
    width: 80% !important;
  }


  .body-padding {
    padding: 0 75px;
  }

  .mobile-align {
    text-align: right;
  }



  </style>

  <style type="text/css" media="screen">
      @media screen {
        @import url(http://fonts.googleapis.com/css?family=Source+Sans+Pro:400,600,900);
        /* Thanks Outlook 2013! http://goo.gl/XLxpyl */
       
        .w280 {
          width: 280px !important;
        }

      }
  </style>

  <style type="text/css" media="only screen and (max-width: 480px)">
    /* Mobile styles */
    @media only screen and (max-width: 480px) {

      table[class*="w320"] {
        width: 320px !important;
      }

      td[class*="w320"] {
        width: 280px !important;
        padding-left: 20px !important;
        padding-right: 20px !important;
      }

      img[class*="w320"] {
        width: 250px !important;
        height: 67px !important;
      }

      td[class*="mobile-spacing"] {
        padding-top: 10px !important;
        padding-bottom: 10px !important;
      }

      *[class*="mobile-hide"] {
        display: none !important;
      }

      *[class*="mobile-br"] {
        font-size: 12px !important;
      }

      td[class*="mobile-w20"] {
        width: 20px !important;
      }

      img[class*="mobile-w20"] {
        width: 20px !important;
      }

      td[class*="mobile-center"] {
        text-align: center !important;
      }

      table[class*="w100p"] {
        width: 100% !important;
      }

      td[class*="activate-now"] {
        padding-right: 0 !important;
        padding-top: 20px !important;
      }

      td[class*="mobile-block"] {
        display: block !important;
      }

      td[class*="mobile-align"] {
        text-align: left !important;
      }

    }
  </style>
</head>
<body  offset="0" class="body" style="padding:0; margin:0; display:block; background:#eeebeb; -webkit-text-size-adjust:none" bgcolor="#eeebeb">
<table align="center" cellpadding="0" cellspacing="0" width="100%" height="100%">
  <tr>
    <td align="center" valign="top" style="background-color:#eeebeb" width="100%">

    <center>

      <table cellspacing="0" cellpadding="0" width="600" class="w320">
        <tr>
          <td align="center" valign="top">


          


          <table cellspacing="0" cellpadding="0" class="force-full-width" style="background-color:#3bcdb0;">
            <tr>
              <td style="background-color:#8365e2;">

                <table cellspacing="0" cellpadding="0" class="force-full-width">
                  <tr>
                    <td style="font-size:36px; font-weight: 200; color: #ffffff; text-align:center;" class="mobile-spacing">
                    <div class="mobile-br">&nbsp;</div>
                      Selesaikan Pembayaran <br>
                    </td>
                  </tr>
                  
                </table>

                <table cellspacing="0" cellpadding="0" width="100%">
                  <tr>
                    <td>
                      <img src="https://sipitung88.com/images/welcome-concept.png" style="max-width:100%; display:block;">
                    </td>
                  </tr>
                </table>

              </td>
            </tr>
          </table>

          <table cellspacing="0" cellpadding="0" class="force-full-width" bgcolor="#ffffff" width="100%">
            <tr>
              <td style="background-color:#ffffff; padding-top: 15px;">

              <center>
               <table style="margin: 0 auto;" cellspacing="0" cellpadding="0" class="force-width-80" width="80%">
                  <tr>
                    <td style="text-align: left;">
                    <br>
                      <p>Hai {{$maildata['name']}}, tinggal selangkah lagi kamu tergabung di komunitas SiPitung. Segera lunasi biaya pendaftaran sebesar</p> 
					  <h1 style="text-align:center;">{{rupiah($maildata['valid'])}}</h1>
					  <p>Pembayaran dapat dilakukan melalui salah satu bank berikut</p>
					  
					     <table cellspacing="0" cellpadding="0" class="force-full-width" width="100%">
                        <tr>
                          <td class="mobile-block">
								<table cellspacing="0" cellpadding="0" class="force-full-width" width="100%">
								<tbody><tr>
								  <td>
									<img src="https://sipitung88.com/images/bca.png" width="120" height="40">
									<p style="    font-size: 14px;padding-bottom: 10px;font-weight: bold;">018-188-5725</p>
								  </td>
								  <td>
									<img src="https://sipitung88.com/images/mandiri.png" width="120" height="46">
									<p style="    font-size: 14px;padding-bottom: 10px;font-weight: bold;">018-188-5725</p>
								  </td>
								  <td>
									<img src="https://sipitung88.com/images/bri.png" width="120" height="40">
									<p style="    font-size: 14px;padding-bottom: 10px;font-weight: bold;">018-188-5725</p>
								  </td>
								</tr>
								
							  </tbody>
							  </table>
                              
                          </td>
                        </tr>
                        <tr>
                          <td class="mobile-block">
								<table cellspacing="0" cellpadding="0" class="force-full-width" width="100%">
								<tbody><tr>
								  <td style="text-align:center;">
									  A.n Suyitno
								  </td>
								</tr>
								
							  </tbody>
							  </table>
                          </td>
                        </tr>
                      </table>
                      <p>Bila kamu mengalami kesulitan dalam bertransaksi, silahkan hubungi hotline kami di nomor +62822-3308-8819 atau melalui email <a href="mailto:halo@sipitung88.com">halo@sipitung88.com</a> <br><br>
                      </p>
					  <p align="right">Terimakasih, <br>
                      SiPitung</p><br/><br/>
					 
					 
                    </td>
                  </tr>
                </table>
              </center>

             


              <table cellspacing="0" cellpadding="0" bgcolor="#363636"  class="force-full-width" width="100%">
                <tr>
                  <td style="background-color:#363636; text-align:center;">
                 
					
					
                  <br>
                  <br>
                  </td>
                </tr>
                <tr>
                  <td style="color:#f0f0f0; font-size: 14px; text-align:center; padding-bottom:4px;">
                    &copy; 2021 All Rights Reserved
                  </td>
                </tr>
                <tr>
                  <td style="color:#8365e2 !important; font-size: 14px; text-align:center;">
                    <a href="sipitung88.com">Komunitas SiPitung</a>
                  </td>
                </tr>
                <tr>
                  <td style="font-size:12px;">
                    &nbsp;
                  </td>
                </tr>
              </table>

              </td>
            </tr>
          </table>







          </td>
        </tr>
      </table>

    </center>




    </td>
  </tr>
</table>
</body>
</html>