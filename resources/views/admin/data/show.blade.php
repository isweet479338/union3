@extends('layouts.master', ['title' => __('User'), 'modal' => 'lg'])
@section('content')
<div class="row">
    <div class="col-md-12">
        <div class="badge-header">
            <div class="row">
                <div class="col-md-6">
                    <button class="title btn btn-outline btn-wd mt-2">
                    <i class="glyphicon fa fa-th-list"></i>
                    {{_lang('People_info')}}
                    </button>
                </div>


                   <div class="col-md-6" style="text-align: right;">
                    <span onclick="printDiv()" class="btn-icon btn btn-outline btn-round btn-wd mt-2">
                        <span class="btn-label">
                            <i class="glyphicon fa fa-print"></i>
                        </span>{{_lang('Print')}}
                    </span>
                </div>



            </div>
            </div>
            <div id="print" class="card data-tables">
                <div class="card-body table-striped table-no-bordered table-hover dataTable dtr-inline table-full-width">

                        <div style="text-align: center;" >
                            <h5>{{ _lang('Union_name_2023') }}</h5>
                            <h3>{{ _lang('SEDOIN_UNION_PORISAHD') }}</h3>
                            <p>{{ _lang('Bramonbaria_Comilla') }}</p>

                            <div class="row">
                                <div class="col-md-4">{{ _lang('Village: Rajapur') }}</div>
                                <div class="col-md-4">{{ _lang('Road:52A') }}</div>
                                <div class="col-md-4">{{ _lang('Word: 7') }}</div>
                            </div>

                        </div>

                    <div class="fresh-datatables">
                        <table  class="table table-striped table-no-bordered table-hover" cellspacing="0" width="100%" style="width:100%">
                            <thead>
                                <tr>
                                    <th class="text-center">{{ _lang('SL') }}</th>
                                    <th class="text-center">{{ _lang('Holder_Name') }}</th>
                                    <th class="text-center">{{ _lang('Education') }}</th>
                                    <th class="text-center">{{ _lang('House_name') }}</th>
                                    <th class="text-center">{{ _lang('Mobile') }}</th>
                                    <th class="text-center">{{ _lang('HOUSE_TYPE') }}</th>
                                    <th class="text-center">{{ _lang('OCCUPATION') }}</th>
                                    <th class="text-center">{{ _lang('GOVERNMENT_GRANTS') }}</th>
                                    <th class="text-center">{{ _lang('IS_THE_ALLOWANCE_ELIGIBLE') }}</th>
                                    <th class="text-center">{{ _lang('LANDLESS?') }}</th>
                                    <th class="text-center">{{ _lang('VAT') }}</th>


                                </tr>
                            </thead>
                            <tbody>
                              
                                <tr>
                                    <td class="text-center"></td>
                                    <td class="text-center">{{ $people->holder_name }}</td>
                                    <td class="text-center">{{ $people->education }}</td>
                                    <td class="text-center">{{ $people->house_name }}</td>
                                    <td class="text-center">{{ $people->mobile }}</td>
                                    <td class="text-center">{{ $people->house_type }}</td>
                                    <td class="text-center">{{ $people->occupation }}</td>
                                    <td class="text-center">{{ $people->government_grants}}</td>
                                    <td class="text-center">{{$people->allowance_eligible}}</td>
                                    <td class="text-center">{{ $people->is_landless }}</td>
                                    <td class="text-center">{{ $people->tax }}</td>
                                </tr>
                                <?php 

                                $num = ['I', 'II', 'III', 'IV', 'V', 'VI', 'VII', 'VIII', 'IX', 'X', 'XI', 'XII', 'XIII', 'IVX'];

                                $mem = 1;
                                $sub_mem = -1;
                                if (count($member) > 0 ) {

                                    foreach ($member as $key => $value) {
                                    
                                    ?>
                                
                                    <tr>
                                    <td class="text-center">{{$mem++}}</td>
                                    <td class="text-center">{{ $value->member_name }}</td>
                                    <td class="text-center">{{ $value->member_education }}</td>
                                    <td class="text-center"></td>
                                    <td class="text-center"></td>
                                    <td class="text-center"></td>
                                    <td class="text-center">{{ $value->member_occupation }}</td>
                                    <td class="text-center">{{ $value->member_government_grants}}</td>
                                    <td class="text-center">{{$value->member_allowance_eligible}}</td>
                                    <td class="text-center"></td>
                                    <td class="text-center"></td>
                                </tr>

                                 <?php 

                                    foreach ($sub[$key] as $keyy => $va) { 
                                        $sub_mem++;
                                        ?>
                                <tr>
                                    <td class="text-center">{{$num[$sub_mem]}}</td>
                                    <td class="text-center">{{ $va->sm_name }}</td>
                                    <td class="text-center">{{ $va->sm_education }}</td>
                                    <td class="text-center"></td>
                                    <td class="text-center"></td>
                                    <td class="text-center"></td>
                                    <td class="text-center">{{ $va->sm_occupation }}</td>
                                    <td class="text-center">{{ $va->sm_government_grants}}</td>
                                    <td class="text-center">{{$va->sm_allowance_eligible}}</td>
                                    <td class="text-center"></td>
                                    <td class="text-center"></td>
                                </tr>

                                     <?php } }  } ?>

                             
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @endsection
    @push('js')
    <script>
        function printDiv() {

// 1st system
             // var printContents = document.getElementById('print').innerHTML;
             // var originalContents = document.body.innerHTML;
             // document.body.innerHTML = printContents;
             // window.print();
             // document.body.innerHTML = originalContents;
// 1st system end

// 2nd system
            // var css = '@page { size: landscape; }',
            // head = document.head || document.getElementById('print');
            // console.log( head );
            // style = document.createElement('style');
            // style.type = 'text/css';
            // style.media = 'print';
            // if (style.styleSheet){
            //   style.styleSheet.cssText = css;
            // } else {
            //   style.appendChild(document.createTextNode(css));
            // }
            // head.appendChild(style);
            // window.print();
 // 2nd system end

 // 3rd system
            var frame = document.getElementById('print');
            var data = frame.innerHTML;
            var win = window.open('', '', 'height=500,width=900');
            win.document.write('<style>@page{size:landscape;}</style><html><head><title></title>');
            win.document.write('</head><body >');
            win.document.write(data);
            win.document.write('</body></html>');
            win.print();
            win.close();
            return true;
 // 3rd system end


        }
    </script>
    @endpush