<div class="content d-flex flex-column flex-column-fluid" id="kt_content">
    <div class="d-flex flex-column-fluid">
        <div class="container">
            <!-- begin:: Content Head -->
            <div class="card card-custom gutter-b">
                <div class="card-body d-flex align-items-center py-5 py-lg-13">
                    <!--begin::Icon-->
                    <div class="d-flex flex-center position-relative ml-5 mr-15 ml-lg-9">
                        <span class="svg-icon svg-icon-5x svg-icon-primary position-absolute opacity-15">
                            <!--begin::Svg Icon | path:/keen/theme/demo3/dist/assets/media/svg/icons/Layout/Layout-polygon.svg-->
                            <svg xmlns="http://www.w3.org/2000/svg" width="70px" height="70px" viewBox="0 0 70 70"
                                fill="none">
                                <g stroke="none" stroke-width="1" fill-rule="evenodd">
                                    <path
                                        d="M28 4.04145C32.3316 1.54059 37.6684 1.54059 42 4.04145L58.3109 13.4585C62.6425 15.9594 65.3109 20.5812 65.3109 25.5829V44.4171C65.3109 49.4188 62.6425 54.0406 58.3109 56.5415L42 65.9585C37.6684 68.4594 32.3316 68.4594 28 65.9585L11.6891 56.5415C7.3575 54.0406 4.68911 49.4188 4.68911 44.4171V25.5829C4.68911 20.5812 7.3575 15.9594 11.6891 13.4585L28 4.04145Z"
                                        fill="#000000"></path>
                                </g>
                            </svg>
                            <!--end::Svg Icon-->
                        </span>
                        <span class="svg-icon svg-icon-2x svg-icon-primary position-absolute">
                            <!--begin::Svg Icon | path:/keen/theme/demo3/dist/assets/media/svg/icons/Tools/Compass.svg-->
                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                                width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                    <rect x="0" y="0" width="24" height="24"></rect>
                                    <path
                                        d="M7.07744993,12.3040451 C7.72444571,13.0716094 8.54044565,13.6920474 9.46808594,14.1079953 L5,23 L4.5,18 L7.07744993,12.3040451 Z M14.5865511,14.2597864 C15.5319561,13.9019016 16.375416,13.3366121 17.0614026,12.6194459 L19.5,18 L19,23 L14.5865511,14.2597864 Z M12,3.55271368e-14 C12.8284271,3.53749572e-14 13.5,0.671572875 13.5,1.5 L13.5,4 L10.5,4 L10.5,1.5 C10.5,0.671572875 11.1715729,3.56793164e-14 12,3.55271368e-14 Z"
                                        fill="#000000" opacity="0.3"></path>
                                    <path
                                        d="M12,10 C13.1045695,10 14,9.1045695 14,8 C14,6.8954305 13.1045695,6 12,6 C10.8954305,6 10,6.8954305 10,8 C10,9.1045695 10.8954305,10 12,10 Z M12,13 C9.23857625,13 7,10.7614237 7,8 C7,5.23857625 9.23857625,3 12,3 C14.7614237,3 17,5.23857625 17,8 C17,10.7614237 14.7614237,13 12,13 Z"
                                        fill="#000000" fill-rule="nonzero"></path>
                                </g>
                            </svg>
                            <!--end::Svg Icon-->
                        </span>
                    </div>
                    <!--end::Icon-->
                    <!--begin::Description-->
                    <div class="m-0 text-dark-50 font-weight-bold font-size-lg">The Keen Datatable component can be
                        displayed in modal pop-ups with vertical scrolling. For more information visit
                        <a class="font-weight-bold"
                            href="https://keenthemes.com/keen/?page=docs&amp;section=html/components/datatable"
                            target="_blank">Keen KTDatatable Documentation</a>.
                    </div>
                    <!--end::Description-->
                </div>
            </div>
            <!-- end:: Content Head -->

            <!-- begin:: card -->
            <div class="card card-custom">
                <div class="card-body">
                    <div
                        class="datatable datatable-bordered datatable-head-custom datatable-default datatable-primary datatable-loaded">
                        <table id="example" class="datatable-table" style="width:100%">
                            <thead class="datatable-head">
                                <tr class="datatable-row">
                                    <th class="datatable-cell datatable-cell-sort">Id Documento</th>
                                    <th class="datatable-cell datatable-cell-sort">Nombre</th>
                                    <th class="datatable-cell datatable-cell-sort">Fecha</th>
                                    <th class="datatable-cell datatable-cell-sort">Siclo</th>
                                    <th class="datatable-cell datatable-cell-sort">Descripcion</th>
                                    <th class="datatable-cell datatable-cell-sort">Cursos</th>
                                    <th class="datatable-cell datatable-cell-sort">Acciones</th>
                                </tr>
                            </thead>
                            <tbody class="datatable-body">

                                <?php

                            $stmt = $conn->prepare("SELECT * FROM sys_documentos");
                            $stmt->execute();
                            $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
                            foreach ($stmt->fetchAll() as $k => $v) {
                                //echo $v['Sys_documentosLink'];
                                echo "
                                <tr class='datatable-row'>
                                <td class='datatable-cell'>
                                    <span class='symbol symbol-circle symbol-light-primary symbol-60 mr-5'>
                                        <span class='symbol-label d-flex flex-column'>
                                            <span class='font-weight-bolder font-size-h3'>".$v['idSys_documentos']."</span>
                                        </span>
                                    </span>
                                </td>
                                <td class='datatable-cell'>".$v['Sys_documentos']."</td>
                                <td class='datatable-cell'>".$v['Sys_documentoscoAño']."</td>
                                <td class='datatable-cell'>".$v['Sys_documentoscoCiclo']."</td>
                                <td class='datatable-cell'>Detalle</td>
                                <td class='datatable-cell'><span style='width: 120px;'><span
                                            class='label label-lg font-weight-bold label-light-danger label-inline'>Matematica</span></span>
                                </td>
                                <td class='datatable-cell'>
                                    <span style='overflow: visible; position: relative; width: 130px;'>
                                        <div class='dropdown dropdown-inline'> <a href='javascript:;'
                                                class='btn btn-sm btn-clean btn-icon mr-2' data-toggle='dropdown'
                                                aria-expanded='false'> <span class='svg-icon svg-icon-md'> <svg
                                                        xmlns='http://www.w3.org/2000/svg'
                                                        xmlns:xlink='http://www.w3.org/1999/xlink' width='24px'
                                                        height='24px' viewBox='0 0 24 24' version='1.1'>
                                                        <g stroke='none' stroke-width='1' fill='none'
                                                            fill-rule='evenodd'>
                                                            <rect x='0' y='0' width='24' height='24'></rect>
                                                            <path
                                                                d='M5,8.6862915 L5,5 L8.6862915,5 L11.5857864,2.10050506 L14.4852814,5 L19,5 L19,9.51471863 L21.4852814,12 L19,14.4852814 L19,19 L14.4852814,19 L11.5857864,21.8994949 L8.6862915,19 L5,19 L5,15.3137085 L1.6862915,12 L5,8.6862915 Z M12,15 C13.6568542,15 15,13.6568542 15,12 C15,10.3431458 13.6568542,9 12,9 C10.3431458,9 9,10.3431458 9,12 C9,13.6568542 10.3431458,15 12,15 Z'
                                                                fill='#000000'></path>
                                                        </g>
                                                    </svg> </span> </a>
                                            <div class='dropdown-menu dropdown-menu-sm dropdown-menu-right'>
                                                <ul class='navi flex-column navi-hover py-2'>
                                                    <li class='navi-item'> 
                                                        <a href='".$v['Sys_documentosLink']."' class='navi-link' target='_blank'> 
                                                            <span class='navi-icon'>
                                                                <i class='la la-file-pdf-o'></i>
                                                            </span> 
                                                            <span class='navi-text'>Descargar PDF</span> 
                                                        </a> 
                                                    </li>
                                                </ul>
                                            </div>
                                        </div> 
                                        <a href='javascript:;' class='btn btn-sm btn-clean btn-icon mr-2'
                                            title='Edit details'> <span class='svg-icon svg-icon-md'> <svg
                                                    xmlns='http://www.w3.org/2000/svg'
                                                    xmlns:xlink='http://www.w3.org/1999/xlink' width='24px'
                                                    height='24px' viewBox='0 0 24 24' version='1.1'>
                                                    <g stroke='none' stroke-width='1' fill='none'
                                                        fill-rule='evenodd'>
                                                        <rect x='0' y='0' width='24' height='24'></rect>
                                                        <path
                                                            d='M8,17.9148182 L8,5.96685884 C8,5.56391781 8.16211443,5.17792052 8.44982609,4.89581508 L10.965708,2.42895648 C11.5426798,1.86322723 12.4640974,1.85620921 13.0496196,2.41308426 L15.5337377,4.77566479 C15.8314604,5.0588212 16,5.45170806 16,5.86258077 L16,17.9148182 C16,18.7432453 15.3284271,19.4148182 14.5,19.4148182 L9.5,19.4148182 C8.67157288,19.4148182 8,18.7432453 8,17.9148182 Z'
                                                            fill='#000000' fill-rule='nonzero'
                                                            transform='translate(12.000000, 10.707409) rotate(-135.000000) translate(-12.000000, -10.707409) '>
                                                        </path>
                                                        <rect fill='#000000' opacity='0.3' x='5' y='20' width='15'
                                                            height='2' rx='1'></rect>
                                                    </g>
                                                </svg> </span> </a> <a href='javascript:;'
                                            class='btn btn-sm btn-clean btn-icon' title='Delete'> <span
                                                class='svg-icon svg-icon-md'> <svg
                                                    xmlns='http://www.w3.org/2000/svg'
                                                    xmlns:xlink='http://www.w3.org/1999/xlink' width='24px'
                                                    height='24px' viewBox='0 0 24 24' version='1.1'>
                                                    <g stroke='none' stroke-width='1' fill='none'
                                                        fill-rule='evenodd'>
                                                        <rect x='0' y='0' width='24' height='24'></rect>
                                                        <path
                                                            d='M6,8 L6,20.5 C6,21.3284271 6.67157288,22 7.5,22 L16.5,22 C17.3284271,22 18,21.3284271 18,20.5 L18,8 L6,8 Z'
                                                            fill='#000000' fill-rule='nonzero'></path>
                                                        <path
                                                            d='M14,4.5 L14,4 C14,3.44771525 13.5522847,3 13,3 L11,3 C10.4477153,3 10,3.44771525 10,4 L10,4.5 L5.5,4.5 C5.22385763,4.5 5,4.72385763 5,5 L5,5.5 C5,5.77614237 5.22385763,6 5.5,6 L18.5,6 C18.7761424,6 19,5.77614237 19,5.5 L19,5 C19,4.72385763 18.7761424,4.5 18.5,4.5 L14,4.5 Z'
                                                            fill='#000000' opacity='0.3'></path>
                                                    </g>
                                                </svg> 
                                            </span> 
                                        </a>
                                    </span>
                                </td>
                            </tr>
                                ";
                            }

                            ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>



            <!-- end :: card -->

        </div>
    </div>
</div>