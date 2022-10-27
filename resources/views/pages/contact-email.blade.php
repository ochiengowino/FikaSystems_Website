<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">

<head>

    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />

    <title>Fika Systems Limited</title>

    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">
    <style>

        body {

            background-color: #FFFFFF; padding: 0; margin: 0;

        }

    </style>

</head>

<body style="background-color: #FFFFFF; padding: 0; margin: 0;">
<div class="container">
    <table border="0" cellpadding="0" cellspacing="10" height="100%" bgcolor="#FFFFFF" width="100%" style="max-width: 650px;" id="bodyTable">

        <tr>

            <td align="center" valign="top">

                <table border="0" cellpadding="0" cellspacing="0" width="100%" id="emailContainer" style="font-family:Arial; color: #333333;">

                    <!-- Logo -->
    {{-- 
                    <tr>

                        <td align="left" valign="top" colspan="2" style="border-bottom: 1px solid #CCCCCC; padding-bottom: 10px;">

                            <img alt="Home" border="0" src="http://starter.fry.com/assets/images/cms/includes/OCP_StarterStore_logo.svg" title="Home" class="sitelogo" width="60%" style="max-width:250px;" />

                        </td>

                    </tr> --}}

                    <!-- Title -->

                    <tr>

                        <td align="left" valign="top" colspan="2" style="border-bottom: 1px solid #CCCCCC; padding: 20px 0 10px 0;">

                            <span style="font-size: 18px; font-weight: normal;">Hi, you received a contact email {{ $data['name'] }},</span>

                        </td>

                    </tr>
            

                    <tr>         
                        <th>Name</th>
                        <td>{{ $data['name'] }}</td>
                    </tr>
                    <tr>            
                        <th>Email</th>
                        <td>{{ $data['email'] }}</td>
                    </tr>
                    <tr>          
                        <th>Phone</th>
                        <td>{{ $data['phone'] }}</td>
                    </tr>
                    <tr>
                        <th>Subject</th>
                        <td>{{ $data['subject'] }}</td>
                    </tr>
            

                    <!-- Messages -->

                    <tr>

                        <td align="left" valign="top" colspan="2" style="padding-top: 10px;">
                            <p><b>Message:</b></p>
                        
                            <p>{{ $data['message'] }}</p>
                                

                                <br /><br />

                        
                        </td>

                    </tr>

                </table>

            </td>

        </tr>

    </table>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>