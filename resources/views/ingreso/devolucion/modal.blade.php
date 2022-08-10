<div class="modal fade" id="ajaxModel" aria-hidden="true">
    <div class="modal-dialog" style="width: 60%;">
        <div class="modal-content" >
            <div class="modal-header">
                <h4 class="modal-title" id="modelHeading"></h4>
            </div>
            <div class="modal-body">
                <form id="devolucionform" name="devolucionform" style="border:1px solid black;">
                   <input type="hidden" name="devolucion_id" id="devolucion_id">

                   <!--cuerpo formulario-->

                   <div class="form-row">
                        <div class="form-group col-md-4">
                            <label for="">Nombre: </label>
                            <input type="text" class="form-control" id="nombre" name="nombre" placeholder="nombre">
                        </div>
                        <div class="form-group col-md-4">
                            <label for="">Apellido Paterno:</label>
                            <input type="text" class="form-control" id="ap_paterno" name="ap_paterno" placeholder="Apellido Paterno">
                        </div>
                        <div class="form-group col-md-4">
                            <label for="">Apellido Materno:</label>
                            <input type="text" class="form-control" id="ap_materno" name="ap_materno" placeholder="Apellido Materno">
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-4">
                            <label for="">DNI: </label>
                            <input type="text" class="form-control" id="DNI" name="DNI" placeholder="DNI">
                        </div>
                        <div class="form-group col-md-4">
                            <label for="">Correo:</label>
                            <input type="text" class="form-control" id="correo" name="correo" placeholder="Correo">
                        </div>
                        <div class="form-group col-md-4">
                            <label for="">Cargo:</label>
                            <input type="text" class="form-control" id="cargo" name="cargo" placeholder="Cargo">
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="form-group col-md-4">
                            <label for="">Oficina: </label>
                            <input type="text" class="form-control" id="oficina" name="oficina" placeholder="Oficina">
                        </div>
                        <div class="form-group col-md-4">
                            <label for="">N° de Celular:</label>
                            <input type="text" class="form-control" id="n_celular" name="n_celular" placeholder="N° de Celular">
                        </div>
                        <div class="form-group col-md-4">
                            <label for="">Estado del Celular:</label>
                            <input type="text" class="form-control" id="estado_cel" name="estado_cel" placeholder="Estado del Celular">
                        </div>
                    </div>
                    <div class="form-row ">
                        <div class="form-group col-md-4">
                            <label for="">IMEI: </label>
                            <input type="text" class="form-control" id="IMEI" name="IMEI" placeholder="IMEI">
                        </div>
                        <div class="form-group col-md-4">
                            <label for="">SIM:</label>
                            <input type="text" class="form-control" id="SIM" name="SIM" placeholder="SIM">
                        </div>
                        <div class="form-group col-md-4">
                            <label for="">Marca:</label>
                            <input type="text" class="form-control" id="marca" name="marca" placeholder="marca">
                        </div>
                    </div>

                    <div class="form-row ">
                        <div class="form-group col-md-4">
                            <label for="">Modelo: </label>
                            <input type="text" class="form-control" id="modelo" name="modelo" placeholder="modelo">
                        </div>
                        <div class="form-group col-md-4">
                            <label for="">adaptador:</label>
                            <input type="text" class="form-control" id="adaptador" name="adaptador" placeholder="adaptador" value="SI">
                        </div>
                        <div class="form-group col-md-4">
                            <label for="">Cable USB:</label>
                            <input type="text" class="form-control" id="cable_usb" name="cable_usb" placeholder="cable_usb" value="SI">
                        </div>
                    </div>
                    <div class="form-row ">
                        <div class="form-group col-md-4">
                            <input type="hidden" class="form-control" id="sim_card" name="sim_card" placeholder="sim_card">
                        </div>
                        <div class="form-group col-md-4">
                            <input type="hidden" class="form-control" id="adaptador" name="adaptador" placeholder="adaptador" value="devolucion">
                        </div>
                        <div class="form-group col-md-4">
                            <input type="hidden" class="form-control" id="flag" name="flag" placeholder="flag" value="1">
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary" id="saveBtn" value="create">Save changes
                    </button>
                
                </form>
            </div>
        </div>
    </div>
</div>