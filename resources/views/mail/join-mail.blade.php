@extends('mail.template');


@section('content')
       <table align="left" border="0" cellpadding="0" cellspacing="0" style="text-align: left; background-color: #fafafa;" width="100%">
                        <tr>
                            <td style="text-align: center;">
                                <img src="../assets/images/email-temp/delivery-2.png" alt="" style=";margin-bottom: 30px;">
                            </td>
                        </tr>
                        <tr style="background-color: #fafafa; text-align:center">
                            <td >
                                <p style="font-size: 14px;"><b>Hello Admin,</b></p>
                                <p style="font-size: 14px;">Une nouvelle personne vient de remplir le formulaire nous rejoindre du site Youdom Care</p>
                                <p style="font-size: 14px;">Ci dessous les informations du demandeur d'emploi :</p>
                            </td>
                        </tr>
          </table>

             <table cellpadding="0" cellspacing="0" border="0" align="left" style="width: 100%;margin-top: 10px; margin-bottom: 10px; background-color: #fafafa;">
                        <tbody>
                            <tr>
                                <td style="background-color: #fafafa;border: 1px solid #ddd;padding: 15px;letter-spacing: 0.3px;width: 50%;">
                                    <h5 style="font-size: 16px; font-weight: 600;color: #000; line-height: 16px; 
                                    padding-bottom: 13px; border-bottom: 1px solid #e6e8eb; letter-spacing: -0.65px; margin-top:0; margin-bottom: 13px;">
                                        Civilité</h5>
                                    <p style="text-align: left;font-weight: normal; font-size: 14px; color: #000000;line-height: 21px;    margin-top: 0;">
                                        {{$join->civility}}</p>
                                </td>
                                <td><img src="{{ asset('assets/email/email-temp/space.jpg') }}" alt=" " height="25" width="30">
                                </td>
                                <td style="background-color: #fafafa;border: 1px solid #ddd;padding: 15px;letter-spacing: 0.3px;width: 50%;">
                                    <h5 style="font-size: 16px;font-weight: 600;color: #000; line-height: 16px; padding-bottom: 13px; border-bottom: 1px solid #e6e8eb; letter-spacing: -0.65px; margin-top:0; margin-bottom: 13px;">
                                        Nom Complet : </h5>
                                    <p style="text-align: left;font-weight: normal; font-size: 14px; color: #000000;line-height: 21px;    margin-top: 0;">
                                        {{ $join->name }} {{ $join->username }}</p>
                                </td>
                            </tr>
                            <tr>
                                <td style="background-color: #fafafa;border: 1px solid #ddd;padding: 15px;letter-spacing: 0.3px;width: 50%;">
                                    <h5 style="font-size: 16px; font-weight: 600;color: #000; line-height: 16px; padding-bottom: 13px; border-bottom: 1px solid #e6e8eb; letter-spacing: -0.65px; margin-top:0; margin-bottom: 13px;">
                                        Code Postal, Ville</h5>
                                    <p style="text-align: left;font-weight: normal; font-size: 14px; color: #000000;line-height: 21px;    margin-top: 0;">
                                        {{ $join->postal_code }}, {{ $join->town}}</p>
                                </td>
                                <td><img src="{{ asset('assets/email/email-temp/space.jpg') }}" alt=" " height="25" width="30">
                                </td>
                               <td style="background-color: #fafafa;border: 1px solid #ddd;padding: 15px;letter-spacing: 0.3px;width: 50%;">
                                    <h5 style="font-size: 16px; font-weight: 600;color: #000; line-height: 16px; padding-bottom: 13px; border-bottom: 1px solid #e6e8eb; letter-spacing: -0.65px; margin-top:0; margin-bottom: 13px;">
                                        Email : </h5>
                                    <p style="text-align: left;font-weight: normal; font-size: 14px; color: #000000;line-height: 21px;    margin-top: 0;">
                                        {{ $join->email }}</p>
                                </td>
                            </tr>
                            <tr>
                                <td style="background-color: #fafafa;border: 1px solid #ddd;padding: 15px;letter-spacing: 0.3px;width: 50%;">
                                    <h5 style="font-size: 16px;font-weight: 600;color: #000; line-height: 16px; padding-bottom: 13px; border-bottom: 1px solid #e6e8eb; letter-spacing: -0.65px; margin-top:0; margin-bottom: 13px;">
                                        Téléphone : </h5>
                                    <p style="text-align: left;font-weight: normal; font-size: 14px; color: #000000;line-height: 21px;    margin-top: 0;">
                                        {{ $join->phone_number }}</p>
                                </td>
                                <td><img src="{{ asset('assets/email/email-temp/space.jpg') }}" alt=" " height="25" width="30">
                                </td>
                                <td style="background-color: #fafafa;border: 1px solid #ddd;padding: 15px;letter-spacing: 0.3px;width: 50%;">
                                    <h5 style="font-size: 16px;font-weight: 600;color: #000; line-height: 16px; padding-bottom: 13px; border-bottom: 1px solid #e6e8eb; letter-spacing: -0.65px; margin-top:0; margin-bottom: 13px;">
                                        Diplôme : </h5>
                                    <p style="text-align: left;font-weight: normal; font-size: 14px; color: #000000;line-height: 21px;    margin-top: 0;">
                                        {{ $join->diploma }}</p>
                                </td>
                            </tr>
                            <tr>
                                
                                <td style="background-color: #fafafa;border: 1px solid #ddd;padding: 15px;letter-spacing: 0.3px;width: 50%;">
                                    <h5 style="font-size: 16px;font-weight: 600;color: #000; line-height: 16px; padding-bottom: 13px; border-bottom: 1px solid #e6e8eb; letter-spacing: -0.65px; margin-top:0; margin-bottom: 13px;">
                                        Job  sollicité: </h5>
                                    <p style="text-align: left;font-weight: normal; font-size: 14px; color: #000000;line-height: 21px;    margin-top: 0;">
                                        {{ $join->job }}</p>
                                </td>

                                <td><img src="{{ asset('assets/email/email-temp/space.jpg') }}" alt=" " height="25" width="30">
                                </td>
                             

                                <td style="background-color: #fafafa;border: 1px solid #ddd;padding: 15px;letter-spacing: 0.3px;width: 50%;">
                                    <h5 style="font-size: 16px; font-weight: 600;color: #000; line-height: 16px; padding-bottom: 13px; border-bottom: 1px solid #e6e8eb; letter-spacing: -0.65px; margin-top:0; margin-bottom: 13px;">
                                        Années d'expérience : </h5>
                                    <p style="text-align: left;font-weight: normal; font-size: 14px; color: #000000;line-height: 21px;    margin-top: 0;">
                                        {{ $join->year_of_experience }}</p>
                                </td>
                            </tr>
                            <tr>
                                <td style="background-color: #fafafa;border: 1px solid #ddd;padding: 15px;letter-spacing: 0.3px;width: 50%;">
                                    <h5 style="font-size: 16px; font-weight: 600;color: #000; line-height: 16px; padding-bottom: 13px; border-bottom: 1px solid #e6e8eb; letter-spacing: -0.65px; margin-top:0; margin-bottom: 13px;">
                                        Disponibilité : </h5>
                                    <p style="text-align: left;font-weight: normal; font-size: 14px; color: #000000;line-height: 21px;    margin-top: 0;">
                                        {{ $join->available }}</p>
                                </td>
                                <td><img src="{{ asset('assets/email/email-temp/space.jpg') }}" alt=" " height="25" width="30">
                                </td>
                               <td style="background-color: #fafafa;border: 1px solid #ddd;padding: 15px;letter-spacing: 0.3px;width: 50%;">
                                    <h5 style="font-size: 16px; font-weight: 600;color: #000; line-height: 16px; padding-bottom: 13px; border-bottom: 1px solid #e6e8eb; letter-spacing: -0.65px; margin-top:0; margin-bottom: 13px;">
                                        Informations : </h5>
                                    <p style="text-align: left;font-weight: normal; font-size: 14px; color: #000000;line-height: 21px;    margin-top: 0;">
                                        {{ $join->informations }}</p>
                                </td>
                            </tr>
                        </tbody>
                    </table>



@endsection
