<!DOCTYPE html>
<html lang="es">

<body>
    <!-- Inicio Formulario citas -->
    <div class="untree_co-section pb-1">
        <div class="container">
            <div class="block">
                <div class="row justify-content-center">
                    <div class="col-md-8 col-lg-8 pb-0">
                        <form>
                            <div class="row">
                                <div class="col-6">
                                    <div class="form-group">
                                        <label class="text-black">Nombre(s) <span class="text-danger">*</span></label>
                                        <input type="text" class="form-control" id="nombre" name="nombre" required autofocus>

                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="form-group">
                                        <label class="text-black">Apellido(s) <span class="text-danger">*</span></label>
                                        <input type="text" class="form-control" id="apellido" name="apellido" required>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="text-black" for="email">Ingrese su correo electrónico donde se mandara
                                    su comprobante de cita <span class="text-danger">*</span></label>
                                <input type="email" class="form-control" id="correo" name="correo" placeholder="Correo electrónico" required>
                            </div>

                            <div class="form-group">
                                <label class="text-black" for="type">Tipo de servicio <span class="text-danger">*</span></label>
                                <select class="form-control" id="tipoServicio" name="tipoServicio">
                                    <option value="">Seleccione un servicio</option>
                                    <option value="1">Consulta de vestidos</option>
                                    <option value="2">Toma de medidas para vestidos de XV años</option>
                                    <option value="3">Toma de medidas para vestidos de Bodas</option>
                                    <option value="3">Elaboración del ramo</option>
                                    <option value="4">Elaboración de los cojines</option>
                                    <option value="5">Otro</option>
                                </select>
                            </div>

                            <div class="form-group mb-5">
                                <label class="text-black" for="type">Hora cita <span class="text-danger">*</span></label>
                                <select class="form-control" id="horaCita" name="horaCita">
                                    <option value="">Seleccione hora</option>
                                    <option value="1">11:00 AM</option>
                                    <option value="2">12:00 PM</option>
                                    <option value="3">13:00 PM</option>
                                    <option value="4">14:00 PM</option>
                                    <option value="5">15:00 PM</option>
                                    <option value="6">16:00 PM</option>
                                    <option value="7">17:00 PM</option>
                                </select>
                            </div>

                            <!-- boton -->
                            <div class="d-grid gap-2 col-6 mx-auto">
                                <button type="submit" class="btn btn-secondary text-center">Agendar Cita</button>
                            </div>
                            <!-- boton -->
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Fin Formulario Contacto -->

</body>

</html>