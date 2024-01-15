@extends('admin.layouts.app')


@section('content')
    <div class="main-content">
        <section class="section">
            <div class="section-body">
                <div class="row">
                    <div class="col-12">
                        <div class="card">

                            <div class="card-body">
                                {{-- <a href="{{ route('admin.carType.create') }}" class="btn btn-primary">Add Car Type</a> --}}
                            </div>

                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        <div class="card">

                            <div class="card-body">
                                <div class="table-responsive">

                                    <div class="dt-buttons btn-group mb-3 mt-4">
                                      <a style="color: white;text-decoration:none" href="{{route('download.pagepdf',['id'=>$id])}}"><button class="btn btn-secondary buttons-pdf buttons-html5" tabindex="0" aria-controls="tableExport"><span>PDF</span></button></a> 
                                        
                                    </div>

                                    {{-- ------------ invoice template --------- --}}




                                    <div  id=":n9" class="ii gt" jslog="20277; u014N:xr6bB; 1:WyIjdGhyZWFkLWY6MTc4NTk5NjU5NzA2MDI2ODU5NiJd; 4:WyIjbXNnLWY6MTc4NTk5NjU5NzA2MDI2ODU5NiJd">
                                        <div id=":n8" class="a3s aiL msg-4897146098054704875">
                                          <div style="margin:0px;background:#eceaea;font-family:Helvetica,sans-serif;padding:40px 0px">
                                            <div class="adM"></div>
                                            <table bgcolor="#eceaea" border="0" cellpadding="0" cellspacing="0" width="700" align="center">
                                              <tbody>
                                                <tr>
                                                  <td>
                                                    <table bgcolor="#ffffff" border="0" cellpadding="0" cellspacing="0" width="100%">
                                                      <tbody>
                                                        <tr>
                                                          <td width="20"></td>
                                                          <td width="250">
                                                            <img src='https://dirhamcars.com/images/dirham-logo-arabic.svg' alt="" style="max-width:250px;  width:100%;" alt="Dirham Car Rental" class="CToWUd" data-bit="iit">
                                                          </td>
                                                          <td align="right">
                                                            <p style="text-align:right;color:#808080;margin:0 0 5px;font-size:16px;line-height:1.2;font-family:Helvetica,sans-serif;padding-top: 20px;">For Support Related To Upcoming Rentals</p>
                                                            <div style="font-size:16px;line-height:1.2;font-weight:bold;font-family:Helvetica,sans-serif;margin-bottom:10px">
                                                              <a href="mailto:info@dirhamcars.com" style="text-decoration:none;color:#003764" target="_blank">info@dirhamcars.com</a>
                                                            </div>
                                                            <div style="font-size:16px;line-height:1.2;font-weight:bold;font-family:Helvetica,sans-serif;margin-bottom:10px">
                                                              <a href="tel:+971509617499" style="text-decoration:none;color:#003764" target="_blank">+971509617499</a>
                                                            </div>
                                                            <div style="font-size:16px;line-height:1.2;font-weight:bold;font-family:Helvetica,sans-serif;margin-bottom:10px">
                                                              <a href="tel:+971509617499" style="text-decoration:none;color:#003764" target="_blank">Toll Free :+971509617499</a>
                                                            </div>
                                                            <div style="font-size:16px;line-height:1.2;font-weight:bold;font-family:Helvetica,sans-serif;margin-bottom:10px">
                                                              <a style="text-decoration:none;color:#003764" target="_blank">TRN Number:100442554000003</a>
                                                            </div>
                                                          </td>
                                                          <td width="20"></td>
                                                        </tr>
                                                      </tbody>
                                                    </table>
                                                  </td>
                                                </tr>
                                                <tr>
                                                  <td>
                                                    <table bgcolor="#ffffff" border="0" cellpadding="0" cellspacing="0" width="100%">
                                                      <tbody>
                                                        <tr>
                                                          <td width="20"></td>
                                                          <td height="30"></td>
                                                          <td width="20"></td>
                                                        </tr>
                                                      </tbody>
                                                    </table>
                                                  </td>
                                                </tr>
                                                <tr>
                                                  <td>
                                                    <table bgcolor="#ffffff" border="0" cellpadding="0" cellspacing="0" width="100%">
                                                      <tbody>
                                                        <tr>
                                                          <td width="20"></td>
                                                          <td>
                                                            <p style="color:#003764;margin:0;font-size:18px;line-height:1;font-weight:bold;display:inline-block;font-family:Helvetica,sans-serif">Dear <a style="color:#fac316;" href="mailto: target=" _blank>{{$data->user_details[0]['email']}}</a> , </p>
                                                          </td>
                                                          <td width="20"></td>
                                                        </tr>
                                                      </tbody>
                                                    </table>
                                                  </td>
                                                </tr>
                                                <tr>
                                                  <td>
                                                    <table bgcolor="#ffffff" border="0" cellpadding="0" cellspacing="0" width="100%">
                                                      <tbody>
                                                        <tr>
                                                          <td width="20"></td>
                                                          <td height="20"></td>
                                                          <td width="20"></td>
                                                        </tr>
                                                      </tbody>
                                                    </table>
                                                  </td>
                                                </tr>
                                                <tr>
                                                  <td>
                                                    <table bgcolor="#ffffff" border="0" cellpadding="0" cellspacing="0" width="100%">
                                                      <tbody>
                                                        <tr>
                                                          <td width="20"></td>
                                                          <td>
                                                            <p style="font-size:16px;line-height:1.2;color:#514d6a;font-family:Helvetica,sans-serif;margin:0"> Your Reservation Has Been Confirmed. Please Find Below The Details </p>
                                                          </td>
                                                          <td width="20"></td>
                                                        </tr>
                                                      </tbody>
                                                    </table>
                                                  </td>
                                                </tr>
                                                <tr>
                                                  <td>
                                                    <table bgcolor="#ffffff" border="0" cellpadding="0" cellspacing="0" width="100%">
                                                      <tbody>
                                                        <tr>
                                                          <td width="20"></td>
                                                          <td height="20"></td>
                                                          <td width="20"></td>
                                                        </tr>
                                                      </tbody>
                                                    </table>
                                                  </td>
                                                </tr>
                                                <tr>
                                                  <td bgcolor="#003764">
                                                    <table border="0" cellpadding="0" cellspacing="0" width="100%">
                                                      <tbody>
                                                       
                                                        
                                                        <tr>
                                                          <td width="20"></td>
                                                          <td height="15"></td>
                                                          <td height="15"></td>
                                                          <td width="20"></td>
                                                        </tr>
                                                      </tbody>
                                                    </table>
                                                  </td>
                                                </tr>
                                                <tr>
                                                  <td bgcolor="#003764">
                                                    <table border="0" cellpadding="0" cellspacing="0" width="100%">
                                                      <tbody>
                                                        <tr>
                                                          <td width="20"></td>
                                                          <td height="15"></td>
                                                          <td height="15"></td>
                                                          <td width="20"></td>
                                                        </tr>
                                                        <tr>
                                                          <td width="20"></td>
                                                          <td>
                                                            <p style="color:#fff;font-size:18px;line-height:1;font-family:Helvetica,sans-serif">Reservation Number <span style="color:#fac316;font-size:18px;line-height:1;font-weight:bold;border-bottom:1px solid #003764;display:inline-block;font-family:Trebuchet MS,sans-serif">DIR#{{$data['invoice_no']}}</span>
                                                            </p>
                                                          </td>
                                                          <td align="right">
                                                            <span style="color:#fff;font-size:18px;font-family:Helvetica,sans-serif">Status : <span style="color:#fac316;font-size:18px;line-height:1;font-weight:bold;border-bottom:1px solid #003764;display:inline-block;font-family:Trebuchet MS,sans-serif">Confirmed</span>
                                                            </span>
                                                          </td>
                                                          <td width="20"></td>
                                                        </tr>
                                                        <tr>
                                                          <td width="20"></td>
                                                          <td height="15"></td>
                                                          <td height="15"></td>
                                                          <td width="20"></td>
                                                        </tr>
                                                      </tbody>
                                                    </table>
                                                  </td>
                                                </tr>
                                                <tr>
                                                  <td>
                                                    <table border="0" cellpadding="0" cellspacing="0" width="100%" bgcolor="#ffffff">
                                                      <tbody>
                                                        <tr>
                                                          <td width="20"></td>
                                                          <td height="25"></td>
                                                          <td width="20"></td>
                                                        </tr>
                                                        <tr>
                                                          <td width="20"></td>
                                                          <td>
                                                            <table border="0" cellpadding="0" cellspacing="0" width="100%">
                                                              <tbody>
                                                                <tr>
                                                                  <td width="10"></td>
                                                                  <td>
                                                                    <p style="color:#003764;margin:0;font-size:18px;line-height:1;font-weight:bold;border-bottom:1px solid #003764;display:inline-block;font-family:Trebuchet MS,sans-serif">Customer Details</p>
                                                                  </td>
                                                                  <td width="10"></td>
                                                                </tr>
                                                              </tbody>
                                                            </table>
                                                          </td>
                                                          <td width="20"></td>
                                                        </tr>
                                                        <tr>
                                                          <td width="20"></td>
                                                          <td bgcolor="#ffffff">
                                                            <table border="0" cellpadding="0" cellspacing="0" width="100%" bgcolor="#ffffff">
                                                              <tbody>
                                                                <tr>
                                                                  <td width="10"></td>
                                                                  <td width="150"></td>
                                                                  <td width="200"></td>
                                                                  <td width="150" height="10"></td>
                                                                  <td width="200"></td>
                                                                  <td width="10"></td>
                                                                </tr>
                                                                <tr>
                                                                  <td></td>
                                                                  <td>
                                                                    <p style="color:#000000;margin:0;font-size:18px;line-height:1;font-weight:555;font-family:Trebuchet MS,sans-serif">Name</p>
                                                                  </td>
                                                                  <td>
                                                                    <p style="color:#000000;margin:0;font-size:16px;line-height:1;font-weight:normal;font-family:Helvetica,sans-serif">{{$data->user_details[0]['first_name'].' '.$data->user_details[0]['last_name']}}
                                                                    </p>
                                                                  </td>
                                                                  <td>
                                                                    <p style="color:#000000;margin:0;font-size:18px;line-height:1;font-weight:555;font-family:Trebuchet MS,sans-serif">Email ID</p>
                                                                  </td>
                                                                  <td>
                                                                    <p style="color:#000000;margin:0;font-size:16px;line-height:1;font-weight:normal;font-family:Helvetica,sans-serif">
                                                                      <a href="mailto:abc@gmail.com" target="_blank">{{$data->user_details[0]['email']}}</a>
                                                                    </p>
                                                                  </td>
                                                                  <td></td>
                                                                </tr>
                                                                <tr>
                                                                  <td></td>
                                                                  <td></td>
                                                                  <td height="14"></td>
                                                                  <td height="14"></td>
                                                                  <td></td>
                                                                  <td></td>
                                                                </tr>
                                                                <tr>
                                                                  <td></td>
                                                                  <td>
                                                                    <p style="color:#000000;margin:0;font-size:18px;line-height:1;font-weight:555;font-family:Trebuchet MS,sans-serif">Contact</p>
                                                                  </td>
                                                                  <td>
                                                                    <p style="color:#000000;margin:0;font-size:16px;line-height:1;font-weight:normal;font-family:Helvetica,sans-serif">{{$data->user_details[0]['phone_number']}}</p>
                                                                  </td>
                                                                  <td>
                                                                    <p style="color:#000000;margin:0;font-size:18px;line-height:1;font-weight:555;font-family:Trebuchet MS,sans-serif">Nationality</p>
                                                                  </td>
                                                                  <td>
                                                                    <p style="color:#000000;margin:0;font-size:16px;line-height:1;font-weight:normal;font-family:Helvetica,sans-serif">{{$data->user_details[0]['country']}}</p>
                                                                  </td>
                                                                  <td></td>
                                                                </tr>
                                                              </tbody>
                                                            </table>
                                                          </td>
                                                          <td width="20"></td>
                                                        </tr>
                                                        <tr>
                                                          <td width="20"></td>
                                                          <td height="25"></td>
                                                          <td width="20"></td>
                                                        </tr>
                                                        <tr>
                                                          <td width="20"></td>
                                                          <td>
                                                            <table border="0" cellpadding="0" cellspacing="0" width="100%">
                                                              <tbody>
                                                                <tr>
                                                                  <td width="10"></td>
                                                                  <td>
                                                                    <p style="color:#003764;margin:0;font-size:18px;line-height:1;font-weight:bold;border-bottom:1px solid #003764;display:inline-block;font-family:Trebuchet MS,sans-serif">Vehicle Details</p>
                                                                  </td>
                                                                  <td width="10"></td>
                                                                </tr>
                                                              </tbody>
                                                            </table>
                                                          </td>
                                                          <td width="20"></td>
                                                        </tr>
                                                        <tr>
                                                          <td width="20"></td>
                                                          <td bgcolor="#ffffff">
                                                            <table border="0" cellpadding="0" cellspacing="0" width="100%" bgcolor="#ffffff">
                                                              <tbody>
                                                                <tr>
                                                                  <td width="10"></td>
                                                                  <td width="134"></td>
                                                                  <td width="506" height="10"></td>
                                                                  <td width="10"></td>
                                                                </tr>
                                                                <tr>
                                                                  <td></td>
                                                                  <td>
                                                                    <p style="color:#000000;margin:0;font-size:18px;line-height:1;font-weight:bold;font-family:Trebuchet MS,sans-serif">Vehicle</p>
                                                                  </td>
                                                                  <td>
                                                                    <p style="color:#000000;margin:0;font-size:16px;line-height:1;font-weight:normal;font-family:Helvetica,sans-serif">{{$data->car_details[0]['model']}}</p>
                                                                  </td>
                                                                  <td></td>
                                                                </tr>
                                                              </tbody>
                                                            </table>
                                                          </td>
                                                          <td width="20"></td>
                                                        </tr>
                                                        <tr>
                                                          <td width="20"></td>
                                                          <td height="25"></td>
                                                          <td width="20"></td>
                                                        </tr>
                                                        <tr>
                                                          <td width="20"></td>
                                                          <td>
                                                            <table border="0" cellpadding="0" cellspacing="0" width="100%">
                                                              <tbody>
                                                                <tr>
                                                                  <td width="10"></td>
                                                                  <td>
                                                                    <p style="color:#003764;margin:0;font-size:18px;line-height:1;font-weight:bold;border-bottom:1px solid #003764;display:inline-block;font-family:Trebuchet MS,sans-serif"> Pick Up</p>
                                                                  </td>
                                                                  <td width="10"></td>
                                                                </tr>
                                                              </tbody>
                                                            </table>
                                                          </td>
                                                          <td width="20"></td>
                                                        </tr>
                                                        <tr>
                                                          <td width="20"></td>
                                                          <td bgcolor="#ffffff">
                                                            <table border="0" cellpadding="0" cellspacing="0" width="100%" bgcolor="#ffffff">
                                                              <tbody>
                                                                <tr>
                                                                  <td width="10"></td>
                                                                  <td width="180"></td>
                                                                  <td width="480" height="10"></td>
                                                                  <td width="10"></td>
                                                                </tr>
                                                                <tr>
                                                                  <td></td>
                                                                  <td>
                                                                    <p style="color:#000000;margin:0;font-size:18px;line-height:1;font-weight:bold;font-family:Trebuchet MS,sans-serif">Pickup Date &amp; Time</p>
                                                                  </td>
                                                                  <td>
                                                                    <p style="color:#000000;margin:0;font-size:16px;line-height:1;font-weight:bold;font-family:Helvetica,sans-serif">{{$data['pickup_date']}} {{$data['pickup_time']}}</p>
                                                                  </td>
                                                                  <td></td>
                                                                </tr>
                                                                <tr>
                                                                  <td></td>
                                                                  <td></td>
                                                                  <td height="14"></td>
                                                                  <td height="14"></td>
                                                                </tr>
                                                                <tr>
                                                                  <td></td>
                                                                  <td>
                                                                    <p style="color:#000000;margin:0;font-size:18px;line-height:1;font-weight:bold;font-family:Trebuchet MS,sans-serif">Location</p>
                                                                  </td>
                                                                  <td>
                                                                    <p style="color:#000000;margin:0;font-size:16px;line-height:1;font-weight:bold;font-family:Helvetica,sans-serif">{{$data['pick_up']}}</p>
                                                                  </td>
                                                                  <td></td>
                                                                </tr>
                                                                <tr>
                                                                  <td></td>
                                                                  <td></td>
                                                                  <td height="14"></td>
                                                                  <td height="14"></td>
                                                                </tr>
                                                              </tbody>
                                                            </table>
                                                          </td>
                                                          <td width="20"></td>
                                                        </tr>
                                                        <tr>
                                                          <td width="20"></td>
                                                          <td height="25"></td>
                                                          <td width="20"></td>
                                                        </tr>
                                                        <tr>
                                                          <td width="20"></td>
                                                          <td>
                                                            <table border="0" cellpadding="0" cellspacing="0" width="100%">
                                                              <tbody>
                                                                <tr>
                                                                  <td width="10"></td>
                                                                  <td>
                                                                    <p style="color:#003764;margin:0;font-size:18px;line-height:1;font-weight:bold;border-bottom:1px solid #003764;display:inline-block;font-family:Trebuchet MS,sans-serif">Return</p>
                                                                  </td>
                                                                  <td width="10"></td>
                                                                </tr>
                                                              </tbody>
                                                            </table>
                                                          </td>
                                                          <td width="20"></td>
                                                        </tr>
                                                        <tr>
                                                          <td width="20"></td>
                                                          <td bgcolor="#ffffff">
                                                            <table border="0" cellpadding="0" cellspacing="0" width="100%" bgcolor="#ffffff">
                                                              <tbody>
                                                                <tr>
                                                                  <td width="10"></td>
                                                                  <td width="180"></td>
                                                                  <td width="480" height="10"></td>
                                                                  <td width="10"></td>
                                                                </tr>
                                                                <tr>
                                                                  <td></td>
                                                                  <td>
                                                                    <p style="color:#000000;margin:0;font-size:18px;line-height:1;font-weight:bold;font-family:Trebuchet MS,sans-serif">Return Date &amp; Time</p>
                                                                  </td>
                                                                  <td>
                                                                    <p style="color:#000000;margin:0;font-size:16px;line-height:1;font-weight:bold;font-family:Helvetica,sans-serif">{{$data['return_date']}} {{$data['pickup_time']}}</p>
                                                                  </td>
                                                                  <td></td>
                                                                </tr>
                                                                <tr>
                                                                  <td></td>
                                                                  <td></td>
                                                                  <td height="14"></td>
                                                                  <td height="14"></td>
                                                                </tr>
                                                                <tr>
                                                                  <td></td>
                                                                  <td>
                                                                    <p style="color:#000000;margin:0;font-size:18px;line-height:1;font-weight:bold;font-family:Trebuchet MS,sans-serif">Location</p>
                                                                  </td>
                                                                  <td>
                                                                    <p style="color:#000000;margin:0;font-size:16px;line-height:1;font-weight:bold;font-family:Helvetica,sans-serif">{{$data['return_pickup']}}</p>
                                                                  </td>
                                                                  <td></td>
                                                                </tr>
                                                                <tr>
                                                                  <td></td>
                                                                  <td></td>
                                                                  <td height="14"></td>
                                                                  <td height="14"></td>
                                                                </tr>
                                                              </tbody>
                                                            </table>
                                                          </td>
                                                          <td width="20"></td>
                                                        </tr>
                                                        <tr>
                                                          <td width="20"></td>
                                                          <td height="20"></td>
                                                          <td width="20"></td>
                                                        </tr>
                                                        <tr>
                                                          <td width="20"></td>
                                                          <td>
                                                            <table border="0" cellpadding="0" cellspacing="0" width="100%">
                                                              <tbody>
                                                                <tr>
                                                                  <td width="10"></td>
                                                                  <td>
                                                                    <p style="color:#003764;margin:0;font-size:18px;line-height:1;font-weight:bold;border-bottom:1px solid #003764;display:inline-block;font-family:Trebuchet MS,sans-serif">Payment Details</p>
                                                                  </td>
                                                                  <td width="10"></td>
                                                                </tr>
                                                              </tbody>
                                                            </table>
                                                          </td>
                                                          <td width="20"></td>
                                                        </tr>
                                                        <tr>
                                                          <td width="20"></td>
                                                          <td bgcolor="#ffffff">
                                                            <table border="0" cellpadding="0" cellspacing="0" width="100%" bgcolor="#ffffff">
                                                              <tbody>
                                                                <tr>
                                                                  <td width="10"></td>
                                                                  <td height="10"></td>
                                                                  <td width="10"></td>
                                                                </tr>
                                                                <tr>
                                                                  <td width="10"></td>
                                                                  <td>
                                                                    <p style="color:#000000;margin:0;font-size:18px;line-height:1;font-weight:bold;font-family:Helvetica,sans-serif">Online Payment</p>
                                                                  </td>
                                                                  <td width="10"></td>
                                                                </tr>
                                                              </tbody>
                                                            </table>
                                                          </td>
                                                          <td width="20"></td>
                                                        </tr>
                                                        <tr>
                                                          <td width="20"></td>
                                                          <td height="25"></td>
                                                          <td width="20"></td>
                                                        </tr>
                                                        <tr>
                                                          <td width="20"></td>
                                                          <td>
                                                            <table border="0" cellpadding="0" cellspacing="0" width="100%">
                                                              <tbody>
                                                                <tr>
                                                                  <td width="10"></td>
                                                                  <td>
                                                                    <p style="color:#003764;margin:0;font-size:18px;line-height:1;font-weight:bold;border-bottom:1px solid #003764;display:inline-block;font-family:Trebuchet MS,sans-serif">Rental Details</p>
                                                                  </td>
                                                                  <td width="10"></td>
                                                                </tr>
                                                              </tbody>
                                                            </table>
                                                          </td>
                                                          <td width="20"></td>
                                                        </tr>
                                                        <tr>
                                                          <td width="20"></td>
                                                          <td bgcolor="#ffffff">
                                                            <table border="0" cellpadding="0" cellspacing="0" width="100%" bgcolor="#ffffff">
                                                              <tbody>
                                                                <tr>
                                                                  <td width="10"></td>
                                                                  <td width="220"></td>
                                                                  <td width="440" height="10"></td>
                                                                  <td width="10"></td>
                                                                </tr>
                                                              
                                                                <tr>
                                                                  <td></td>
                                                                  <td></td>
                                                                  <td height="14"></td>
                                                                  <td height="14"></td>
                                                                </tr>
                                                                <tr>
                                                                  <td></td>
                                                                  <td>
                                                                    <p style="color:#000000;margin:0;font-size:18px;line-height:1;font-weight:bold;font-family:Trebuchet MS,sans-serif">Third Party Insurance </p>
                                                                  </td>
                                                                  <td>
                                                                    <p style="color:#000000;margin:0;font-size:16px;line-height:1;font-weight:normal;font-family:Helvetica,sans-serif">The hirer is liable to pay the applicable INSURANCE EXCESS in case of an accident where the hirer is at-fault or the Third party is unknown. </p>
                                                                  </td>
                                                                  <td></td>
                                                                </tr>
                                                                <tr>
                                                                  <td></td>
                                                                  <td></td>
                                                                  <td height="14"></td>
                                                                  <td height="14"></td>
                                                                </tr>
                                                                <tr>
                                                                  <td></td>
                                                                  <td>
                                                                    <p style="color:#000000;margin:0;font-size:18px;line-height:1;font-weight:bold;font-family:Trebuchet MS,sans-serif">Fuel Policy </p>
                                                                  </td>
                                                                  <td>
                                                                    <p style="color:#000000;margin:0;font-size:16px;line-height:1;font-weight:normal;font-family:Helvetica,sans-serif">Pick your car up with a full tank of fuel, and return back the car with a full tank </p>
                                                                  </td>
                                                                  <td></td>
                                                                </tr>
                                                                <tr>
                                                                  <td></td>
                                                                  <td></td>
                                                                  <td height="14"></td>
                                                                  <td height="14"></td>
                                                                </tr>
                                                                <tr>
                                                                  <td></td>
                                                                  <td>
                                                                    <p style="color:#000000;margin:0;font-size:18px;line-height:1;font-weight:bold;font-family:Trebuchet MS,sans-serif">Cancellation </p>
                                                                  </td>
                                                                  <td>
                                                                    <p style="color:#000000;margin:0;font-size:16px;line-height:1;font-weight:normal;font-family:Helvetica,sans-serif">Cancellations of Prepaid rentals with less than 48 hours’ notice from Pick up Date, Dirham Car Rental UAE will charge an Administration fee of AED: 105 &amp; Cancellations of Prepaid rentals with more than 48 hours’ notice from Pick up Date are Free of Charge </p>
                                                                  </td>
                                                                  <td></td>
                                                                </tr>
                                                                <tr>
                                                                  <td></td>
                                                                  <td></td>
                                                                  <td height="14"></td>
                                                                  <td height="14"></td>
                                                                </tr>
                                                                <tr>
                                                                  <td></td>
                                                                  <td>
                                                                    <p style="color:#000000;margin:0;font-size:18px;line-height:1;font-weight:bold;font-family:Trebuchet MS,sans-serif">Modification </p>
                                                                  </td>
                                                                  <td>
                                                                    <p style="color:#000000;margin:0;font-size:16px;line-height:1;font-weight:normal;font-family:Helvetica,sans-serif">Modification fee of AED: 52.50 if changes made with less than 48 hrs from Pick up Date &amp; if changes made with more than 48 hrs from Pick up Date are Free of Charge (Prepaid Bookings) </p>
                                                                  </td>
                                                                  <td></td>
                                                                </tr>
                                                                <tr>
                                                                  <td></td>
                                                                  <td></td>
                                                                  <td height="14"></td>
                                                                  <td height="14"></td>
                                                                </tr>
                                                              </tbody>
                                                            </table>
                                                          </td>
                                                          <td width="20"></td>
                                                        </tr>
                                                        <tr>
                                                          <td width="20"></td>
                                                          <td height="25"></td>
                                                          <td width="20"></td>
                                                        </tr>
                                                        <tr>
                                                          <td width="20"></td>
                                                          <td></td>
                                                          <td width="20"></td>
                                                        </tr>
                                                        <tr>
                                                          <td width="20"></td>
                                                          <td height="25"></td>
                                                          <td width="20"></td>
                                                        </tr>
                                                        <tr>
                                                          <td width="20"></td>
                                                          <td>
                                                            <table border="0" cellpadding="0" cellspacing="0" width="100%">
                                                              <tbody>
                                                                <tr>
                                                                  <td width="10"></td>
                                                                  <td>
                                                                    <p style="color:#003764;margin:0;font-size:18px;line-height:1;font-weight:bold;border-bottom:1px solid #003764;display:inline-block;font-family:Trebuchet MS,sans-serif">Charge Description</p>
                                                                  </td>
                                                                  <td align="right"></td>
                                                                  <td width="10"></td>
                                                                </tr>
                                                              </tbody>
                                                            </table>
                                                          </td>
                                                          <td width="20"></td>
                                                        </tr>
                                                        <tr>
                                                          <td width="20"></td>
                                                          <td height="25"></td>
                                                          <td width="20"></td>
                                                        </tr>
                                                        <tr>
                                                          <td width="20"></td>
                                                          <td>
                                                            <table border="0" cellpadding="0" cellspacing="0" width="100%">
                                                              <tbody>
                                                                <tr>
                                                                  <td width="10"></td>
                                                                  <td>
                                                                    <p style="margin:0;font-size:18px;line-height:1;font-weight:bold;display:inline-block;font-family:Trebuchet MS,sans-serif"> Total Rental Day(s) :</p>
                                                                  </td>
                                                                  <td align="right">
                                                                    <p style="margin:0;font-size:18px;line-height:1;font-weight:bold;display:inline-block;font-family:Trebuchet MS,sans-serif">{{$data['days']}} Day(s) Days &nbsp;</p>
                                                                  </td>
                                                                  <td width="10"></td>
                                                                </tr>
                                                              </tbody>
                                                            </table>
                                                          </td>
                                                          <td width="20"></td>
                                                        </tr>
                                                        <tr>
                                                          <td width="20"></td>
                                                          <td height="10"></td>
                                                          <td width="20"></td>
                                                        </tr>
                                                        <tr>
                                                          <td width="20"></td>
                                                          <td height="10" style="border-top:1px solid #e8e8e8"></td>
                                                          <td width="20"></td>
                                                        </tr>
                                                        <tr>
                                                          <td width="20"></td>
                                                          <td height="10"></td>
                                                          <td width="20"></td>
                                                        </tr>
                                                        <tr>
                                                          <td width="20"></td>
                                                          <td>
                                                            <table border="0" cellpadding="0" cellspacing="0" width="100%">
                                                              <tbody>
                                                                <tr>
                                                                  <td width="10"></td>
                                                                  <td>
                                                                    <p style="font-size:18px;line-height:1.2;margin:0;font-weight:bold;text-transform:uppercase;font-family:Trebuchet MS,sans-serif">Items</p>
                                                                  </td>
                                                                  <td align="right">
                                                                    <p style="font-size:18px;line-height:1.2;margin:0;font-weight:bold;text-transform:uppercase;font-family:Trebuchet MS,sans-serif">Total</p>
                                                                  </td>
                                                                  <td width="10"></td>
                                                                </tr>
                                                              </tbody>
                                                            </table>
                                                          </td>
                                                          <td width="20"></td>
                                                        </tr>
                                                        <tr>
                                                          <td width="20"></td>
                                                          <td height="10"></td>
                                                          <td width="20"></td>
                                                        </tr>
                                                        <tr>
                                                          <td width="20"></td>
                                                          <td>
                                                            <p></p>
                                                            <p></p>
                                                             <table border="0" cellpadding="0" cellspacing="0" width="100%">
                                                                                      <tbody>
                                                                                          <tr>
                                                                                              <td width="10"></td>
                                                                                              <td>
                                                                                                
                                                                                                  <p
                                                                                                      style="font-size:16px;line-height:1.8;margin:0;font-family:Helvetica,sans-serif">
                                                                                                      Rental Charge <br>
                                                                                                      <span
                                                                                                          style="color:#0006;font-family:Helvetica,sans-serif">(
                                                                                                          {{ $data['days'] }} day(s) x
                                                                                                          {{ $data['car_price'] }} ) </span>
                                                                                                  </p>
                                                                                              </td>
                                                                                              @php
                                                                                                  $rentalAmount = $data['car_price'] * $data['days'];
                                                                                              @endphp
                                                                                              <td align="right">
                                                                                                  <p
                                                                                                      style="font-size:16px;line-height:1.2;margin:0;font-family:Helvetica,sans-serif">
                                                                                                      {{ $rentalAmount }} </p>
                                                                                              </td>
                                                                                              <td width="10"></td>
                                                                                          </tr>
                                                                                          <tr>
                                                                                              <td width="10"></td>
                                                                                              <td></td>
                                                                                              <td height="12"></td>
                                                                                              <td width="10"></td>
                                                                                          </tr>
                                                                                          @if ($data['carAddon'] !== null)
                                      
                                      
                                                                                              @foreach ($data['carAddon'] as $list)
                                                                                                  @if ($data['currency'] == 'aed')
                                                                                                      @php
                                                                                                          $currencyData = $list->price_aed;
                                                                                                          $priceWithDays = $list->price_aed * $data['days'];
                                                                                                      @endphp
                                                                                                  @else
                                                                                                      @php
                                                                                                          $currencyData = $list->price_usd;
                                                                                                          $priceWithDays = $list->price_usd * $data['days'];
                                                                                                      @endphp
                                                                                                  @endif
                                                                                                  <tr>
                                                                                                      <td width="10"></td>
                                                                                                      <td>
                                                                                                          <p
                                                                                                              style="font-size:16px;line-height:1.8;margin:0;font-family:Helvetica,sans-serif">
                                                                                                              {{ $list->name }} <br>
                                                                                                              <span
                                                                                                                  style="color:#0006;font-family:Helvetica,sans-serif">(
                                                                                                                  {{$data['days']}} day(s) x {{ $currencyData }} ) </span>
                                                                                                          </p>
                                                                                                      </td>
                                                                                                      <td align="right">
                                                                                                          <p
                                                                                                              style="font-size:16px;line-height:1.2;margin:0;font-family:Helvetica,sans-serif">
                                                                                                              @if ($data['currecny'] == 'aed')
                                                                                                                  {{ $priceWithDays }}
                                                                                                              @else
                                                                                                                  {{ $priceWithDays }}
                                                                                                              @endif
                                                                                                          </p>
                                                                                                      </td>
                                                                                                      <td width="10"></td>
                                                                                                  </tr>
                                                                                              @endforeach
                                                                                          @endif
                                      
                                                                                          @if ($data['child_seat'] !== "0")
                                                                                          <tr>
                                                                                              <td width="10"></td>
                                                                                              <td>
                                                                                                  <p
                                                                                                      style="font-size:16px;line-height:1.8;margin:0;font-family:Helvetica,sans-serif">
                                                                                                      Child Seat Charge
                                                                                                      <br>
                                                                                                      <span
                                                                                                          style="color:#0006;font-family:Helvetica,sans-serif">(
                                                                                                          {{$data['days']}} day(s) x 35 x {{ $data['child_seat'] }})
                                                                                                      </span>
                                                                                                  </p>
                                                                                              </td>
                                                                                              <td align="right">
                                                                                                  <p
                                                                                                      style="font-size:16px;line-height:1.2;margin:0;font-family:Helvetica,sans-serif">
                                                                                                      {{ 35 * $data['child_seat'] * $data['days'] }}
                                                                                                  </p>
                                                                                              </td>
                                                                                              <td width="10"></td>
                                                                                          </tr>
                                                                                          <tr>
                                                                                              <td width="10"></td>
                                                                                              <td></td>
                                                                                              <td height="12"></td>
                                                                                              <td width="10"></td>
                                                                                          </tr>
                                      
                                                                                          @endif
                                                                                          <tr>
                                                                                              <td width="10"></td>
                                                                                              <td style="border-top:1px solid #e8e8e8"></td>
                                                                                              <td style="border-top:1px solid #e8e8e8"></td>
                                                                                              <td width="10"></td>
                                                                                          </tr>
                                                                                          <tr>
                                                                                              <td width="10"></td>
                                                                                              <td></td>
                                                                                              <td height="8"></td>
                                                                                              <td width="10"></td>
                                                                                          </tr>
                                                                                          <tr>
                                                                                              <td width="10"></td>
                                                                                              <td>
                                                                                                  <p
                                                                                                      style="font-size:16px;line-height:1.2;margin:0;font-weight:bold;font-family:Trebuchet MS,sans-serif">
                                                                                                      Sub Total</p>
                                                                                              </td>
                                                                                              <td align="right">
                                                                                                  <p
                                                                                                      style="font-size:16px;line-height:1.2;margin:0;font-weight:bold;font-family:Trebuchet MS,sans-serif">
                                                                                                      {{ $data['sub_total_amount'] }}</p>
                                                                                              </td>
                                                                                              <td width="10"></td>
                                                                                          </tr>
                                                                                          <tr>
                                                                                              <td width="10"></td>
                                                                                              <td></td>
                                                                                              <td height="8"></td>
                                                                                              <td width="10"></td>
                                                                                          </tr>
                                                                                          <tr>
                                                                                              <td width="10"></td>
                                                                                              <td>
                                                                                                  <p
                                                                                                      style="font-size:16px;line-height:1.2;margin:0;font-weight:bold;font-family:Trebuchet MS,sans-serif">
                                                                                                      VAT 5%</p>
                                                                                              </td>
                                                                                              <td align="right">
                                                                                                  <p
                                                                                                      style="font-size:16px;line-height:1.2;margin:0;font-weight:bold;font-family:Trebuchet MS,sans-serif">
                                                                                                      {{ $data['tax_amount'] }}</p>
                                                                                              </td>
                                                                                              <td width="10"></td>
                                                                                          </tr>
                                                                                          <tr>
                                                                                              <td width="10"></td>
                                                                                              <td></td>
                                                                                              <td height="8"></td>
                                                                                              <td width="10"></td>
                                                                                          </tr>
                                                                                          <tr>
                                                                                              <td width="10"></td>
                                                                                              <td style="border-top:1px solid #e8e8e8"></td>
                                                                                              <td style="border-top:1px solid #e8e8e8"></td>
                                                                                              <td width="10"></td>
                                                                                          </tr>
                                                                                          <tr>
                                                                                              <td width="10"></td>
                                                                                              <td></td>
                                                                                              <td height="8"></td>
                                                                                              <td width="10"></td>
                                                                                          </tr>
                                                                                          @if ($data['payment_status'] == 2)
                                                                                              <tr>
                                                                                                  <td width="10"></td>
                                                                                                  <td>
                                                                                                      <p
                                                                                                          style="font-size:16px;line-height:1.2;margin:0;font-weight:bold;font-family:Trebuchet MS,sans-serif">
                                                                                                          Grand Total</p>
                                                                                                  </td>
                                                                                                  <td align="right">
                                                                                                      <p
                                                                                                          style="font-size:20px;line-height:1.2;margin:0;font-weight:bold;color:#fac316;font-family:Trebuchet MS,sans-serif">
                                                                                                          <span
                                                                                                              style="font-size:12px;line-height:1;color:#0006;font-family:Trebuchet MS,sans-serif">AED</span>
                                                                                                          {{ $data['grand_amount'], $data['currency'] }}
                                                                                                      </p>
                                                                                                  </td>
                                                                                                  <td width="10"></td>
                                                                                              </tr>
                                                                                              <tr>
                                                                                                  <td width="10"></td>
                                                                                                  <td></td>
                                                                                                  <td height="8"></td>
                                                                                                  <td width="10"></td>
                                                                                              </tr>
                                      
                                                                                              <tr>
                                                                                                  <td width="10"></td>
                                                                                                  <td>
                                                                                                      <p
                                                                                                          style="font-size:16px;line-height:1.2;margin:0;font-weight:bold;font-family:Trebuchet MS,sans-serif">
                                                                                                          Pay Now Total</p>
                                                                                                  </td>
                                                                                                  <td align="right">
                                                                                                      <p
                                                                                                          style="font-size:20px;line-height:1.2;margin:0;font-weight:bold;color:#fac316;font-family:Trebuchet MS,sans-serif">
                                                                                                          <span
                                                                                                              style="font-size:12px;line-height:1;color:#0006;font-family:Trebuchet MS,sans-serif">AED</span>
                                                                                                          {{ $data["amount"], $data['currency'] }}
                                                                                                      </p>
                                                                                                  </td>
                                                                                                  <td width="10"></td>
                                                                                              </tr>
                                                                                              <tr>
                                                                                                  <td width="10"></td>
                                                                                                  <td></td>
                                                                                                  <td height="8"></td>
                                                                                                  <td width="10"></td>
                                                                                              </tr>
                                                                                          @endif
                                                                                          @if($data['payment_status']==1 || $data['payment_status']==3)
                                                                                          <tr>
                                                                                              <td width="10"></td>
                                                                                              <td>
                                                                                                  <p
                                                                                                      style="font-size:16px;line-height:1.2;margin:0;font-weight:bold;font-family:Trebuchet MS,sans-serif">
                                                                                                      Grand Total</p>
                                                                                              </td>
                                                                                              <td align="right">
                                                                                                  <p
                                                                                                      style="font-size:20px;line-height:1.2;margin:0;font-weight:bold;color:#fac316;font-family:Trebuchet MS,sans-serif">
                                                                                                      <span
                                                                                                          style="font-size:12px;line-height:1;color:#0006;font-family:Trebuchet MS,sans-serif">{{strtoupper($data['currency'])}}</span>
                                                                                                      {{ $data['amount']}}
                                      
                                                                                                  </p>
                                                                                              </td>
                                                                                              <td width="10"></td>
                                                                                          </tr>
                                                                                          @else
                                                                                          <tr>
                                                                                              <td width="10"></td>
                                                                                              <td>
                                                                                                  <p
                                                                                                      style="font-size:16px;line-height:1.2;margin:0;font-weight:bold;font-family:Trebuchet MS,sans-serif">
                                                                                                      PayLater</p>
                                                                                              </td>
                                                                                              <td align="right">
                                                                                                  <p
                                                                                                      style="font-size:20px;line-height:1.2;margin:0;font-weight:bold;color:#fac316;font-family:Trebuchet MS,sans-serif">
                                                                                                      <span
                                                                                                          style="font-size:12px;line-height:1;color:#0006;font-family:Trebuchet MS,sans-serif">{{strtoupper($data['currency'])}}</span>
                                                                                                      {{ $data['remaining_amount']}}
                                      
                                                                                                  </p>
                                                                                              </td>
                                                                                              <td width="10"></td>
                                                                                          </tr>
                                                                                           @endif
                                                                                          
                                                                                          <tr>
                                                                                              <td width="10"></td>
                                                                                              <td></td>
                                                                                              <td height="8"></td>
                                                                                              <td width="10"></td>
                                                                                          </tr>
                                                                                          <tr>
                                                                                              <td width="10"></td>
                                                                                              <td style="border-top:1px solid #e8e8e8"></td>
                                                                                              <td style="border-top:1px solid #e8e8e8"></td>
                                                                                              <td width="10"></td>
                                                                                          </tr>
                                                                                          <tr>
                                                                                              <td width="10"></td>
                                                                                              <td></td>
                                                                                              <td height="8"></td>
                                                                                              <td width="10"></td>
                                                                                          </tr>
                                                                                      </tbody>
                                                                                  </table>
                                                          </td>
                                                          <td width="20"></td>
                                                        </tr>
                                                        <tr>
                                                          <td width="20"></td>
                                                          <td height="10"></td>
                                                          <td width="20"></td>
                                                        </tr>
                                                        <tr>
                                                          <td width="20"></td>
                                                          <td>
                                                            <table border="0" cellpadding="0" cellspacing="0" width="100%">
                                                              <tbody>
                                                                <tr>
                                                                  <td width="10"></td>
                                                                  <td>
                                                                    <p style="color:#003764;margin:0;font-size:18px;line-height:1;font-weight:bold;border-bottom:1px solid #003764;display:inline-block;font-family:Trebuchet MS,sans-serif"> Terms and Conditions</p>
                                                                  </td>
                                                                  <td width="10"></td>
                                                                </tr>
                                                                <tr>
                                                                  <td width="10"></td>
                                                                  <td height="8"></td>
                                                                  <td width="10"></td>
                                                                </tr>
                                                                <tr>
                                                                  <td width="10"></td>
                                                                  <td>
                                                                    <p class="MsoNormal">
                                                                      <span style="font-size:14.0pt;line-height:107%;color:#003764">Documentation Required <u></u>
                                                                        <u></u>
                                                                      </span>
                                                                    </p>
                                                                    <p style="margin-top:11.25pt;margin-right:0in;margin-bottom:0in;margin-left:0in;margin-bottom:.0001pt;line-height:18.0pt">
                                                                      <span style="font-size:14.0pt;color:#63666a">All renters must be able to provide a valid driver’s license, passport with visa page and authorized credit card. <u></u>
                                                                        <u></u>
                                                                      </span>
                                                                    </p>
                                                                    <p style="margin-top:11.25pt;margin-right:0in;margin-bottom:0in;margin-left:0in;margin-bottom:.0001pt;line-height:18.0pt">
                                                                      <span style="font-size:14.0pt;color:#63666a">All drivers must carry a locally accepted driving license. <u></u>
                                                                        <u></u>
                                                                      </span>
                                                                    </p>
                                                                    <h5 style="margin-top:22.5pt;margin-right:0in;margin-bottom:0in;margin-left:0in;margin-bottom:.0001pt">
                                                                      <span style="font-size:14.0pt;color:black">UAE RESIDENTS <u></u>
                                                                        <u></u>
                                                                      </span>
                                                                    </h5>
                                                                    <p style="margin-top:11.25pt;margin-right:0in;margin-bottom:0in;margin-left:0in;margin-bottom:.0001pt;line-height:18.0pt">
                                                                      <span style="font-size:14.0pt;color:#63666a">Visitors are encouraged to have an International Driving License/Permit prior from arrival to the UAE. Customers from the following countries can drive in the United Arab Emirates without an International Driving Permit (IDP); however, must hold the passport and driver’s license from the same country: GCC Countries: Saudi Arabia, Oman, Bahrain, Kuwait, Qatar European Countries: Italy, Germany, Switzerland, Poland, Slovakia, Finland, Spain, Netherlands, Greece, Sweden, Belgium, Ireland, Turkey, Denmark, Portugal, Austria, France, United Kingdom, Norway, Romania, Luxemburg, Estonia, Latvia, Serbia, Hungary, Lithuania, Cyprus, Iceland, Holland, Malta, Albania, Bulgaria, The Republic of Montenegro North American Countries : United States of America, Canada. East Asian Countries: Japan, Australia, Singapore, Peoples Republic of China, South Korea, New Zealand, Hong Kong, African Country: South Africa. International or National Driving license in any other language other than Arabic and English should be translated into Arabic or English. The translation should be attested by the Embassy. <u></u>
                                                                        <u></u>
                                                                      </span>
                                                                    </p>
                                                                    <h5 style="margin-top:22.5pt;margin-right:0in;margin-bottom:0in;margin-left:0in;margin-bottom:.0001pt">
                                                                      <span style="font-size:14.0pt;color:black">NON-RESIDENTS <u></u>
                                                                        <u></u>
                                                                      </span>
                                                                    </h5>
                                                                    <p class="MsoNormal">
                                                                      <span style="font-size:14.0pt;line-height:107%;color:#222222">• International Driving License <br> • Passport&nbsp; <br> • Visiting Visa&nbsp; </span>
                                                                      <span style="font-size:14.0pt;line-height:107%;color:black">
                                                                        <u></u>
                                                                        <u></u>
                                                                      </span>
                                                                    </p>
                                                                    <p style="margin-top:11.25pt;margin-right:0in;margin-bottom:0in;margin-left:0in;margin-bottom:.0001pt;line-height:18.0pt">
                                                                      <span style="font-size:14.0pt;color:#63666a">Visitors are encouraged to have an International Driving License/Permit prior from arrival to the UAE. Customers from the following countries can drive in the United Arab Emirates without an International Driving Permit (IDP); however, must hold the passport and driver’s license from the same country: GCC Countries: Saudi Arabia, Oman, Bahrain, Kuwait, Qatar European Countries: Germany, Italy, Switzerland, Poland, Slovakia, Finland, Spain, Netherlands, Greece, Sweden, Belgium, Ireland, Turkey, Denmark, Portugal, Austria, France, United Kingdom, Norway, Romania, Luxemburg, Latvia, Serbia, Lithuania, Bulgaria North American Countries: United States of America, Quebec State in Canada. East Asian Countries: Japan, Australia, Singapore, Peoples Republic of China, South Korea, New Zealand, Hongkong, African Country: South Africa <u></u>
                                                                        <u></u>
                                                                      </span>
                                                                    </p>
                                                                    <p style="margin-top:11.25pt;margin-right:0in;margin-bottom:0in;margin-left:0in;margin-bottom:.0001pt;line-height:18.0pt">
                                                                      <span style="font-size:14.0pt;color:#63666a">International or National Driving license in any other language other than Arabic and English should be translated into Arabic or English. The translation should be attested by the Embassy. <u></u>
                                                                        <u></u>
                                                                      </span>
                                                                    </p>
                                                                    <p style="margin-top:11.25pt;margin-right:0in;margin-bottom:0in;margin-left:0in;margin-bottom:.0001pt;line-height:18.0pt">
                                                                      <span style="font-size:14.0pt;color:#63666a">&nbsp;</span>
                                                                    </p>
                                                                    
                                                                    <p class="MsoNormal">
                                                                      <span style="font-size:14.0pt;line-height:107%;color:#003764">GENERAL TERMS AND CONDITIONS <u></u>
                                                                        <u></u>
                                                                      </span>
                                                                    </p>
                                                                    <h5 style="margin-top:22.5pt;margin-right:0in;margin-bottom:0in;margin-left:0in;margin-bottom:.0001pt">
                                                                      <span style="font-size:14.0pt">
                                                                        <u></u>
                                                                        <u></u>
                                                                      </span>
                                                                    </h5>
                                                                    <h5 style="margin-top:22.5pt;margin-right:0in;margin-bottom:0in;margin-left:0in;margin-bottom:.0001pt">
                                                                      <span style="font-size:14.0pt;color:black">Minimum Rental Period <u></u>
                                                                        <u></u>
                                                                      </span>
                                                                    </h5>
                                                                    <p style="margin-top:11.25pt;margin-right:0in;margin-bottom:0in;margin-left:0in;margin-bottom:.0001pt;line-height:18.0pt">
                                                                      <span style="font-size:14.0pt;color:#63666a">Rental charges are on 24 hours basis. <u></u>
                                                                        <u></u>
                                                                      </span>
                                                                    </p>
                                                                    <h5 style="margin-top:22.5pt;margin-right:0in;margin-bottom:0in;margin-left:0in;margin-bottom:.0001pt">
                                                                      <span style="font-size:14.0pt;color:black">Age Restrictions <u></u>
                                                                        <u></u>
                                                                      </span>
                                                                    </h5>
                                                                    <p style="margin-top:11.25pt;margin-right:0in;margin-bottom:0in;margin-left:0in;margin-bottom:.0001pt;line-height:18.0pt">
                                                                      <span style="font-size:14.0pt;color:#63666a">Minimum age requirement is 22 years. <u></u>
                                                                        <u></u>
                                                                      </span>
                                                                    </p>
                                                                    <h5 style="margin-top:22.5pt;margin-right:0in;margin-bottom:0in;margin-left:0in;margin-bottom:.0001pt">
                                                                      <span style="font-size:14.0pt;color:black">Insurance Excess <u></u>
                                                                        <u></u>
                                                                      </span>
                                                                    </h5>
                                                                    <p style="margin-top:11.25pt;margin-right:0in;margin-bottom:0in;margin-left:0in;margin-bottom:.0001pt;line-height:18.0pt">
                                                                      <span style="font-size:14.0pt;color:#63666a">Deductible amount charged where hirer is at fault or provided a police report under hit and run case: <u></u>
                                                                        <u></u>
                                                                      </span>
                                                                    </p>
                                                                    <p style="margin-top:11.25pt;margin-right:0in;margin-bottom:0in;margin-left:0in;margin-bottom:.0001pt;line-height:18.0pt">
                                                                      <b>
                                                                        <span style="font-size:14.0pt;color:black">AED 1500.00 (Mini to Standard Vehicles), AED 2500 to AED 5000 (Compact SUV to Dirham Prestige Vehicles)</span>
                                                                      </b>
                                                                      <span style="font-size:14.0pt;color:#63666a">
                                                                        <u></u>
                                                                        <u></u>
                                                                      </span>
                                                                    </p>
                                                                    <h5 style="margin-top:22.5pt;margin-right:0in;margin-bottom:0in;margin-left:0in;margin-bottom:.0001pt">
                                                                      <span style="font-size:14.0pt;color:black">Deposit <u></u>
                                                                        <u></u>
                                                                      </span>
                                                                    </h5>
                                                                    <p style="margin-top:11.25pt;margin-right:0in;margin-bottom:0in;margin-left:0in;margin-bottom:.0001pt;line-height:18.0pt">
                                                                      <span style="font-size:14.0pt;color:#63666a">A pre-authorization is taken from the hirer’s credit card at the time of rental. Pre-authorization amount is between 1500/-AED to 5000/-AED depending on the vehicle type. We keep pre-authorization amount for 14 Working Days from the Start Date of the Rental. Credit card on the name of card holder must be available at pick up location. This is a mandatory requirement. The credit card must have enough funds to cover the security deposit. <u></u>
                                                                        <u></u>
                                                                      </span>
                                                                    </p>
                                                                  
                                                                    
                                                                    <h5 style="margin-top:22.5pt;margin-right:0in;margin-bottom:0in;margin-left:0in;margin-bottom:.0001pt">
                                                                      <span style="font-size:14.0pt;color:black">Method of Payment <u></u>
                                                                        <u></u>
                                                                      </span>
                                                                    </h5>
                                                                    <p style="margin-top:11.25pt;margin-right:0in;margin-bottom:0in;margin-left:0in;margin-bottom:.0001pt;line-height:18.0pt">
                                                                      <span style="font-size:14.0pt;color:#63666a">We accept all major Credit Cards (MASTER, VISA, JCB, DINERS). Credit card should be valid for a minimum of 3 months from the day of rental and must be physically available at time of vehicle collection. <u></u>
                                                                        <u></u>
                                                                      </span>
                                                                    </p>
                                                                    <h5 style="margin-top:22.5pt;margin-right:0in;margin-bottom:0in;margin-left:0in;margin-bottom:.0001pt">
                                                                      <span style="font-size:14.0pt;color:black">Return Charges <u></u>
                                                                        <u></u>
                                                                      </span>
                                                                    </h5>
                                                                    <h5 style="margin-top:22.5pt;margin-right:0in;margin-bottom:0in;margin-left:0in;margin-bottom:.0001pt">
                                                                      <span style="font-size:14.0pt;color:black">1 - Airport Return Charges<u></u>
                                                                        <u></u>
                                                                      </span>
                                                                    </h5>
                                                                    <p style="margin-top:11.25pt;margin-right:0in;margin-bottom:0in;margin-left:0in;margin-bottom:.0001pt;line-height:18.0pt">
                                                                      <span style="font-size:14.0pt;color:#63666a">All vehicles off hired/returned in any of our airport counters will be charged an airport drop off fees. If you wish to avoid this drop off fees, rented vehicles can be returned to any non-airport branch locations between 08:00H to 17:00H (Saturday to Thursday). Presently the airport drop off fees is as follows: Dubai Airport Terminal 1- AED 52.50/-, Dubai Airport Terminal 3-AED 52.50/-, Sharjah Airport- AED 21/- and Abu Dhabi Airport- AED 52.50/-.</span>
                                                                    </p>
                                      
                                                                    <h5 style="margin-top:22.5pt;margin-right:0in;margin-bottom:0in;margin-left:0in;margin-bottom:.0001pt">
                                                                      <span style="font-size:14.0pt;color:black">2 - Non Airport Return<u></u>
                                                                        <u></u>
                                                                      </span>
                                                                    </h5>
                                                                    <p style="margin-top:11.25pt;margin-right:0in;margin-bottom:0in;margin-left:0in;margin-bottom:.0001pt;line-height:18.0pt">
                                                                      <span style="font-size:14.0pt;color:#63666a">Drop-offs at any Non-Airport locations will be free of cost based on the working hours as mentioned on Locations.</span>
                                                                    </p>
                                      
                                                                  
                                      
                                                                    <h5 style="margin-top:22.5pt;margin-right:0in;margin-bottom:0in;margin-left:0in;margin-bottom:.0001pt">
                                                                      <span style="font-size:14.0pt;color:black">One Way Fee<u></u>
                                                                        <u></u>
                                                                      </span>
                                                                    </h5>
                                                                    <p style="margin-top:11.25pt;margin-right:0in;margin-bottom:0in;margin-left:0in;margin-bottom:.0001pt;line-height:18.0pt">
                                                                      <span style="font-size:14.0pt;color:#63666a">If you arrange to pick the car up in one location and drop it off in different Emirate One Way Fee will apply as below.
                                                                      From Dubai & Northern Emirates Locations to Abu Dhabi & Al Ain Locations will be Dhs 210/- per one-way drop.
                                                                      From Abu Dhabi & Al Ain Locations to Dubai & Northern Emirates Locations will be Dhs 210/- per one-way drop.
                                                                      From Abu Dhabi to Al Ain will be Dhs 210/- per one-way drop.
                                                                      From Al Ain to Abu Dhabi will be Dhs 210/- per one-way drop</span>
                                                                    </p>
                                      
                                                                    <h5 style="margin-top:22.5pt;margin-right:0in;margin-bottom:0in;margin-left:0in;margin-bottom:.0001pt">
                                                                      <span style="font-size:14.0pt;color:black">One Way Fees<u></u>
                                                                        <u></u>
                                                                      </span>
                                                                    </h5>
                                                                    <p style="margin-top:11.25pt;margin-right:0in;margin-bottom:0in;margin-left:0in;margin-bottom:.0001pt;line-height:18.0pt">
                                                                      <span style="font-size:14.0pt;color:#63666a">Reduces the excess insurance/liability amount to ZERO.</span>
                                                                    </p>
                                      
                                           
                                                                      <h5 style="margin-top:22.5pt;margin-right:0in;margin-bottom:0in;margin-left:0in;margin-bottom:.0001pt">
                                                                      <span style="font-size:14.0pt;color:black">Monthly Rentals <u></u>
                                                                        <u></u>
                                                                      </span>
                                                                    </h5>
                                                                    <p style="margin-top:11.25pt;margin-right:0in;margin-bottom:0in;margin-left:0in;margin-bottom:.0001pt;line-height:18.0pt">
                                                                      <span style="font-size:14.0pt;color:#63666a">Monthly rentals are calculated from 22 days & above rental period. Advance payment is mandatory.Agreements opened on DAILY and WEEKLY rentals cannot be extended to MONTHLY contract <u></u>
                                                                        <u></u>
                                                                      </span>
                                                                    </p>
                                                                    <p style="margin-top:11.25pt;margin-right:0in;margin-bottom:0in;margin-left:0in;margin-bottom:.0001pt;line-height:18.0pt">
                                                                      <span style="font-size:14.0pt;color:#63666a">Agreements opened on DAILY and WEEKLY rentals cannot be extended to MONTHLY contract. <u></u>
                                                                        <u></u>
                                                                      </span>
                                                                    </p>
                                                                    <h5 style="margin-top:22.5pt;margin-right:0in;margin-bottom:0in;margin-left:0in;margin-bottom:.0001pt">
                                                                      <span style="font-size:14.0pt;color:black">Personal Accident Insurance <u></u>
                                                                        <u></u>
                                                                      </span>
                                                                    </h5>
                                                                    <p style="margin-top:11.25pt;margin-right:0in;margin-bottom:0in;margin-left:0in;margin-bottom:.0001pt;line-height:18.0pt">
                                                                      <span style="font-size:14.0pt;color:#63666a">To add more security on your driving, we also offer Personal Accident Insurance, this can purchase at an additional cost which covers the driver and the passengers. <u></u>
                                                                        <u></u>
                                                                      </span>
                                                                    </p>
                                                                    <h5 style="margin-top:22.5pt;margin-right:0in;margin-bottom:0in;margin-left:0in;margin-bottom:.0001pt">
                                                                      <span style="font-size:14.0pt;color:black">Driving License <u></u>
                                                                        <u></u>
                                                                      </span>
                                                                    </h5>
                                                                    <p style="margin-top:11.25pt;margin-right:0in;margin-bottom:0in;margin-left:0in;margin-bottom:.0001pt;line-height:18.0pt">
                                                                      <span style="font-size:14.0pt;color:#63666a">All drivers must carry a locally accepted driving license. A valid UAE license is required for UAE residents. Visitors are encouraged to have an International Driving License/Permit prior from arrival to the UAE. <u></u>
                                                                        <u></u>
                                                                      </span>
                                                                    </p>
                                                                    <h5 style="margin-top:22.5pt;margin-right:0in;margin-bottom:0in;margin-left:0in;margin-bottom:.0001pt">
                                                                      <span style="font-size:14.0pt;color:black">Fuel Policy <u></u>
                                                                        <u></u>
                                                                      </span>
                                                                    </h5>
                                                                    <p style="margin-top:11.25pt;margin-right:0in;margin-bottom:0in;margin-left:0in;margin-bottom:.0001pt;line-height:18.0pt">
                                                                      <span style="font-size:14.0pt;color:#63666a">The hirer should return the vehicle with the same fuel level as given by the company. If not, the hirer will be charged the cost of fuel plus a service charge.<u></u>
                                                                        <u></u>
                                                                      </span>
                                                                    </p>
                                                                    <h5 style="margin-top:22.5pt;margin-right:0in;margin-bottom:0in;margin-left:0in;margin-bottom:.0001pt">
                                                                      <span style="font-size:14.0pt;color:black">Salik (Toll Fee) <u></u>
                                                                        <u></u>
                                                                      </span>
                                                                    </h5>
                                                                    <p style="margin-top:11.25pt;margin-right:0in;margin-bottom:0in;margin-left:0in;margin-bottom:.0001pt;line-height:18.0pt">
                                                                      <span style="font-size:14.0pt;color:#63666a">All of our cars are installed with Salik sticker which will be AED 5 per passage at the Salik toll gates. <u></u>
                                                                        <u></u>
                                                                      </span>
                                                                    </p>
                                                                    
                                                                    
                                                                    
                                                                  
                                                              <br>
                                                                <tr>
                                                                  <td width="10"></td>
                                                                  <td>
                                                                    <p style="font-size:16px;line-height:1.3;margin:0;font-family:Helvetica,sans-serif">Authorized Signature &amp; Company Stamp</p>
                                                                    <p style="font-size:16px;line-height:1.3;margin:0;font-weight:bold;font-family:Trebuchet MS,sans-serif">Regards,</p>
                                                                    <p style="font-size:16px;line-height:1.3;margin:0;font-weight:bold;font-family:Trebuchet MS,sans-serif">Dirham Car Rental </p>
                                                                  </td>
                                                                  <td width="10"></td>
                                                                </tr>
                                                                <tr>
                                                                  <td width="10"></td>
                                                                  <td height="15"></td>
                                                                  <td width="10"></td>
                                                                </tr>
                                                              </tbody>
                                                            </table>
                                                          </td>
                                                          <td width="20"></td>
                                                        </tr>
                                                      </tbody>
                                                    </table>
                                                  </td>
                                                </tr>
                                              </tbody>
                                            </table>
                                          </div>
                                        </div>
                                      </div>
                                      </div>







                                    {{-- ------------ invoice template --------- --}}
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <div class="settingSidebar">
            <a href="javascript:void(0)" class="settingPanelToggle"> <i class="fa fa-spin fa-cog"></i>
            </a>
            <div class="settingSidebar-body ps-container ps-theme-default">
                <div class=" fade show active">
                    <div class="setting-panel-header">Setting Panel
                    </div>
                    <div class="p-15 border-bottom">
                        <h6 class="font-medium m-b-10">Select Layout</h6>
                        <div class="selectgroup layout-color w-50">
                            <label class="selectgroup-item">
                                <input type="radio" name="value" value="1"
                                    class="selectgroup-input-radio select-layout" checked>
                                <span class="selectgroup-button">Light</span>
                            </label>
                            <label class="selectgroup-item">
                                <input type="radio" name="value" value="2"
                                    class="selectgroup-input-radio select-layout">
                                <span class="selectgroup-button">Dark</span>
                            </label>
                        </div>
                    </div>
                    <div class="p-15 border-bottom">
                        <h6 class="font-medium m-b-10">Sidebar Color</h6>
                        <div class="selectgroup selectgroup-pills sidebar-color">
                            <label class="selectgroup-item">
                                <input type="radio" name="icon-input" value="1"
                                    class="selectgroup-input select-sidebar">
                                <span class="selectgroup-button selectgroup-button-icon" data-toggle="tooltip"
                                    data-original-title="Light Sidebar"><i class="fas fa-sun"></i></span>
                            </label>
                            <label class="selectgroup-item">
                                <input type="radio" name="icon-input" value="2"
                                    class="selectgroup-input select-sidebar" checked>
                                <span class="selectgroup-button selectgroup-button-icon" data-toggle="tooltip"
                                    data-original-title="Dark Sidebar"><i class="fas fa-moon"></i></span>
                            </label>
                        </div>
                    </div>
                    <div class="p-15 border-bottom">
                        <h6 class="font-medium m-b-10">Color Theme</h6>
                        <div class="theme-setting-options">
                            <ul class="choose-theme list-unstyled mb-0">
                                <li title="white" class="active">
                                    <div class="white"></div>
                                </li>
                                <li title="cyan">
                                    <div class="cyan"></div>
                                </li>
                                <li title="black">
                                    <div class="black"></div>
                                </li>
                                <li title="purple">
                                    <div class="purple"></div>
                                </li>
                                <li title="orange">
                                    <div class="orange"></div>
                                </li>
                                <li title="green">
                                    <div class="green"></div>
                                </li>
                                <li title="red">
                                    <div class="red"></div>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="p-15 border-bottom">
                        <div class="theme-setting-options">
                            <label class="m-b-0">
                                <input type="checkbox" name="custom-switch-checkbox" class="custom-switch-input"
                                    id="mini_sidebar_setting">
                                <span class="custom-switch-indicator"></span>
                                <span class="control-label p-l-10">Mini Sidebar</span>
                            </label>
                        </div>
                    </div>
                    <div class="p-15 border-bottom">
                        <div class="theme-setting-options">
                            <label class="m-b-0">
                                <input type="checkbox" name="custom-switch-checkbox" class="custom-switch-input"
                                    id="sticky_header_setting">
                                <span class="custom-switch-indicator"></span>
                                <span class="control-label p-l-10">Sticky Header</span>
                            </label>
                        </div>
                    </div>
                    <div class="mt-4 mb-4 p-3 align-center rt-sidebar-last-ele">
                        <a href="#" class="btn btn-icon icon-left btn-primary btn-restore-theme">
                            <i class="fas fa-undo"></i> Restore Default
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script>
        $(document).ready(function() {
            @if (session('success'))
                iziToast.show({
                    title: 'New Success Message',
                    message: "{{ session('success') }}",
                    theme: 'success',
                    position: 'topRight',
                    timeout: 5000,
                    progressBarColor: '#4CAF50',
                });
            @endif






        });

        function getdelete(id) {
            swal({
                title: 'Are you sure?',
                text: 'Are you sure you want to delete this row?',
                icon: 'warning',
                buttons: true,
                dangerMode: true,
            })
            // .then((willDelete) => {
            //     if (willDelete) {

            //         // $.ajax({
            //         //     url: "{{ route('admin.carType.destory') }}",
            //         //     type: "get",
            //         //     data: {
            //         //         id: id
            //         //     },
            //         //     success: function(response) {
            //         //         iziToast.show({
            //         //             title: 'New Success Message',
            //         //             message: "{{ session('error') }}",
            //         //             theme: 'success',
            //         //             position: 'topRight',
            //         //             timeout: 5000,
            //         //             progressBarColor: '#4CAF50',
            //         //         });
            //         //         swal('Row has been deleted!', {
            //         //             icon: 'success',
            //         //         });
            //         //         window.location.href = "{{ route('admin.carType.index') }}";
            //         //     }
            //         // });

            //         alert("Test");

            //     } else {
            //         swal('Your imaginary file is safe!');
            //     }
            // });
        }
    </script>
@endsection
