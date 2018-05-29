<?php

use Illuminate\Database\Seeder;

class DatosInscripcionTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
        //dependencias
        DB::table('dependencias')->insert([

                //Facultades
            ['dependencia' => 'Vicerrectorado Academico', 'organiza_diplomado'=>null, 'es_facultad'=>null, 'es_escuela'=>null, 'es_posgrado'=>null, 'es_direccion'=>null, 'es_oficina'=>null,  'dependencia_id'=> null, 'es_dep_ac'=>null, 'es_centro_generador'=>null,],
                //Facultades
            ['dependencia' => 'Facultad de Ciencias Agrarias', 'organiza_diplomado'=>null,'es_facultad'=>'1', 'es_escuela'=>null, 'es_posgrado'=>null,'es_direccion'=>null, 'es_oficina'=>null, 'dependencia_id'=> '1', 'es_dep_ac'=>null, 'es_centro_generador'=>1,],
            ['dependencia' => 'Facultad de Medicina', 'organiza_diplomado'=>null,'es_facultad'=>'1', 'es_escuela'=>null, 'es_posgrado'=>null,'es_direccion'=>null, 'es_oficina'=>null, 'dependencia_id'=> '1', 'es_dep_ac'=>null,'es_centro_generador'=>1,],
            ['dependencia' => 'Facultad de Psicología', 'organiza_diplomado'=>null,'es_facultad'=>'1', 'es_escuela'=>null, 'es_posgrado'=>null,'es_direccion'=>null, 'es_oficina'=>null, 'dependencia_id'=> '1', 'es_dep_ac'=>null,'es_centro_generador'=>1,],
            ['dependencia' => 'Facultad de Enfermería', 'organiza_diplomado'=>null,'es_facultad'=>'1', 'es_escuela'=>null, 'es_posgrado'=>null,'es_direccion'=>null, 'es_oficina'=>null, 'dependencia_id'=> '1', 'es_dep_ac'=>null,'es_centro_generador'=>1,],
            ['dependencia' => 'Facultad de Obstetricia', 'organiza_diplomado'=>null,'es_facultad'=>'1', 'es_escuela'=>null, 'es_posgrado'=>null,'es_direccion'=>null, 'es_oficina'=>null, 'dependencia_id'=> '1', 'es_dep_ac'=>null,'es_centro_generador'=>1,],
            ['dependencia' => 'Facultad de Ciencias Administrativas y Turismo', 'organiza_diplomado'=>null,'es_facultad'=>'1', 'es_escuela'=>null, 'es_posgrado'=>null,'es_direccion'=>null, 'es_oficina'=>null, 'dependencia_id'=> '1', 'es_dep_ac'=>null,'es_centro_generador'=>1,],
            ['dependencia' => 'Facultad de Ciencias Contables y Financieras', 'organiza_diplomado'=>null,'es_facultad'=>'1', 'es_escuela'=>null, 'es_posgrado'=>null,'es_direccion'=>null, 'es_oficina'=>null, 'dependencia_id'=> '1', 'es_dep_ac'=>null,'es_centro_generador'=>1,],
            ['dependencia' => 'Facultad de Economía', 'organiza_diplomado'=>null,'es_facultad'=>'1', 'es_escuela'=>null, 'es_posgrado'=>null,'es_direccion'=>null, 'es_oficina'=>null, 'dependencia_id'=> '1', 'es_dep_ac'=>null,'es_centro_generador'=>1,],
            ['dependencia' => 'Facultad de Ciencias Sociales', 'organiza_diplomado'=>null,'es_facultad'=>'1', 'es_escuela'=>null, 'es_posgrado'=>null,'es_direccion'=>null, 'es_oficina'=>null, 'dependencia_id'=> '1', 'es_dep_ac'=>null,'es_centro_generador'=>1,],
            ['dependencia' => 'Facultad de Ciencias de la Educación', 'organiza_diplomado'=>null,'es_facultad'=>'1', 'es_escuela'=>null, 'es_posgrado'=>null,'es_direccion'=>null, 'es_oficina'=>null, 'dependencia_id'=> '1', 'es_dep_ac'=>null,'es_centro_generador'=>1,],
            ['dependencia' => 'Facultad de Derecho y Ciencias Políticas', 'organiza_diplomado'=>null,'es_facultad'=>'1', 'es_escuela'=>null, 'es_posgrado'=>null,'es_direccion'=>null, 'es_oficina'=>null, 'dependencia_id'=> '1', 'es_dep_ac'=>null,'es_centro_generador'=>1,],
            ['dependencia' => 'Facultad de Ingeniería Civil y Arquitectura', 'organiza_diplomado'=>null,'es_facultad'=>'1', 'es_escuela'=>null, 'es_posgrado'=>null,'es_direccion'=>null, 'es_oficina'=>null, 'dependencia_id'=> '1', 'es_dep_ac'=>null,'es_centro_generador'=>1,],
            ['dependencia' => 'Facultad de Ingeniería Industrial y de Sistemas', 'organiza_diplomado'=>null,'es_facultad'=>'1', 'es_escuela'=>null, 'es_posgrado'=>null,'es_direccion'=>null, 'es_oficina'=>null, 'dependencia_id'=> '1', 'es_dep_ac'=>null,'es_centro_generador'=>1,],
            ['dependencia' => 'Facultad de Medicina Veterinaria y Zootecnia', 'organiza_diplomado'=>null,'es_facultad'=>'1', 'es_escuela'=>null, 'es_posgrado'=>null,'es_direccion'=>null, 'es_oficina'=>null, 'dependencia_id'=> '1', 'es_dep_ac'=>null,'es_centro_generador'=>1,],
            //Escuelas
            ['dependencia' => 'Escuela Profesional INGENIERIA AGRONOMICA', 'organiza_diplomado'=>1,'es_facultad'=>null, 'es_escuela'=>'1', 'es_posgrado'=>null,'es_direccion'=>null, 'es_oficina'=>null, 'dependencia_id'=> 2, 'es_dep_ac'=>null,'es_centro_generador'=>1,],
            ['dependencia' => 'Escuela Profesional INGENIERIA AGROINDUSTRIAL', 'organiza_diplomado'=>1,'es_facultad'=>null, 'es_escuela'=>'1', 'es_posgrado'=>null,'es_direccion'=>null, 'es_oficina'=>null, 'dependencia_id'=> 2, 'es_dep_ac'=>null,'es_centro_generador'=>1,],
            ['dependencia' => 'Escuela Profesional INGENIERIA AGROPECUARIA FORESTAL', 'organiza_diplomado'=>1,'es_facultad'=>null, 'es_escuela'=>'1', 'es_posgrado'=>null,'es_direccion'=>null, 'es_oficina'=>null, 'dependencia_id'=> 2, 'es_dep_ac'=>null,'es_centro_generador'=>1,],
            ['dependencia' => 'Escuela Profesional MEDICINA HUMANA', 'organiza_diplomado'=>1,'es_facultad'=>null, 'es_escuela'=>'1', 'es_posgrado'=>null,'es_direccion'=>null, 'es_oficina'=>null, 'dependencia_id'=> 3, 'es_dep_ac'=>null,'es_centro_generador'=>1,],
            ['dependencia' => 'Escuela Profesional ODONTOLOGIA', 'organiza_diplomado'=>1,'es_facultad'=>null, 'es_escuela'=>'1', 'es_posgrado'=>null,'es_direccion'=>null, 'es_oficina'=>null, 'dependencia_id'=> 3, 'es_dep_ac'=>null,'es_centro_generador'=>1,],
            ['dependencia' => 'Escuela Profesional PSICOLOGIA', 'organiza_diplomado'=>1,'es_facultad'=>null, 'es_escuela'=>'1', 'es_posgrado'=>null,'es_direccion'=>null, 'es_oficina'=>null, 'dependencia_id'=> 4, 'es_dep_ac'=>null,'es_centro_generador'=>1,],
            ['dependencia' => 'Escuela Profesional ENFERMERIA', 'organiza_diplomado'=>1,'es_facultad'=>null, 'es_escuela'=>'1', 'es_posgrado'=>null,'es_direccion'=>null, 'es_oficina'=>null, 'dependencia_id'=> 5, 'es_dep_ac'=>null,'es_centro_generador'=>1,],
            ['dependencia' => 'Escuela Profesional OBSTETRICIA', 'organiza_diplomado'=>1,'es_facultad'=>null, 'es_escuela'=>'1','es_posgrado'=>null,'es_direccion'=>null,'es_oficina'=>null,'dependencia_id'=> 6,'es_dep_ac'=>null,'es_centro_generador'=>1,],
            ['dependencia' => 'Escuela Profesional CIENCIAS ADMINISTRATIVAS', 'organiza_diplomado'=>1,'es_facultad'=>null, 'es_escuela'=>'1', 'es_posgrado'=>null,'es_direccion'=>null, 'es_oficina'=>null, 'dependencia_id'=> 7, 'es_dep_ac'=>null,'es_centro_generador'=>1,],
            ['dependencia' => 'Escuela Profesional TURISMO Y HOTELERIA', 'organiza_diplomado'=>1,'es_facultad'=>null, 'es_escuela'=>'1', 'es_posgrado'=>null,'es_direccion'=>null, 'es_oficina'=>null, 'dependencia_id'=> 7, 'es_dep_ac'=>null,'es_centro_generador'=>1,],
            ['dependencia' => 'Escuela Profesional CIENCIAS CONTABLES Y FINANCIERAS', 'organiza_diplomado'=>1,'es_facultad'=>null, 'es_escuela'=>'1', 'es_posgrado'=>null,'es_direccion'=>null, 'es_oficina'=>null, 'dependencia_id'=> 8, 'es_dep_ac'=>null,'es_centro_generador'=>1,],
            ['dependencia' => 'Escuela Profesional ECONOMIA', 'organiza_diplomado'=>1,'es_facultad'=>null, 'es_escuela'=>'1', 'es_posgrado'=>null,'es_direccion'=>null, 'es_oficina'=>null, 'dependencia_id'=> 9, 'es_dep_ac'=>null,'es_centro_generador'=>1,],
            ['dependencia' => 'Escuela Profesional SOCIOLOGIA', 'organiza_diplomado'=>1,'es_facultad'=>null, 'es_escuela'=>'1', 'es_posgrado'=>null,'es_direccion'=>null, 'es_oficina'=>null, 'dependencia_id'=> 10, 'es_dep_ac'=>null,'es_centro_generador'=>1,],
            ['dependencia' => 'Escuela Profesional CIENCIAS DE LA COMUNICACION SOCIAL', 'organiza_diplomado'=>1,'es_facultad'=>null, 'es_escuela'=>'1', 'es_posgrado'=>null,'es_direccion'=>null, 'es_oficina'=>null, 'dependencia_id'=> 10, 'es_dep_ac'=>null,'es_centro_generador'=>1,],
            ['dependencia' => 'Escuela Profesional EDUCACION INICIAL', 'organiza_diplomado'=>1,'es_facultad'=>null, 'es_escuela'=>'1', 'es_posgrado'=>null,'es_direccion'=>null, 'es_oficina'=>null, 'dependencia_id'=> 11, 'es_dep_ac'=>null,'es_centro_generador'=>1,],
            ['dependencia' => 'Escuela Profesional EDUCACION PRIMARIA', 'organiza_diplomado'=>1,'es_facultad'=>null, 'es_escuela'=>'1', 'es_posgrado'=>null,'es_direccion'=>null, 'es_oficina'=>null, 'dependencia_id'=> 11, 'es_dep_ac'=>null,'es_centro_generador'=>1,],
            ['dependencia' => 'Escuela Profesional EDUCACION FISICA', 'organiza_diplomado'=>1,'es_facultad'=>null, 'es_escuela'=>'1', 'es_posgrado'=>null,'es_direccion'=>null, 'es_oficina'=>null, 'dependencia_id'=> 11, 'es_dep_ac'=>null,'es_centro_generador'=>1,],
            ['dependencia' => 'Escuela Profesional FILOSOFIA, PSICOLOGIA Y CIENCIAS SOCIALES', 'organiza_diplomado'=>1,'es_facultad'=>null, 'es_escuela'=>'1', 'es_posgrado'=>null,'es_direccion'=>null, 'es_oficina'=>null, 'dependencia_id'=> 11, 'es_dep_ac'=>null,'es_centro_generador'=>1,],
            ['dependencia' => 'Escuela Profesional LENGUA Y LITERATURA', 'organiza_diplomado'=>1,'es_facultad'=>null, 'es_escuela'=>'1', 'es_posgrado'=>null,'es_direccion'=>null, 'es_oficina'=>null, 'dependencia_id'=> 11, 'es_dep_ac'=>null,'es_centro_generador'=>1,],
            ['dependencia' => 'Escuela Profesional CIENCIAS HISTORICO SOCIALES Y GEOGRAFICAS', 'organiza_diplomado'=>1,'es_facultad'=>null, 'es_escuela'=>'1', 'es_posgrado'=>null,'es_direccion'=>null, 'es_oficina'=>null, 'dependencia_id'=> 11, 'es_dep_ac'=>null,'es_centro_generador'=>1,],
            ['dependencia' => 'Escuela Profesional MATEMATICA Y FISICA', 'organiza_diplomado'=>1,'es_facultad'=>null, 'es_escuela'=>'1', 'es_posgrado'=>null,'es_direccion'=>null, 'es_oficina'=>null, 'dependencia_id'=> 11, 'es_dep_ac'=>null,'es_centro_generador'=>1,],
            ['dependencia' => 'Escuela Profesional BIOLOGIA, QUIMICA Y CIENCIA DEL AMBIENTE', 'organiza_diplomado'=>1,'es_facultad'=>null, 'es_escuela'=>'1', 'es_posgrado'=>null,'es_direccion'=>null, 'es_oficina'=>null, 'dependencia_id'=> 11, 'es_dep_ac'=>null,'es_centro_generador'=>1,],
            ['dependencia' => 'Escuela Profesional DERECHO Y CIENCIAS POLITICAS', 'organiza_diplomado'=>1,'es_facultad'=>null, 'es_escuela'=>'1', 'es_posgrado'=>null,'es_direccion'=>null, 'es_oficina'=>null, 'dependencia_id'=> 12, 'es_dep_ac'=>null,'es_centro_generador'=>1,],
            ['dependencia' => 'Escuela Profesional INGENIERIA CIVIL', 'organiza_diplomado'=>1,'es_facultad'=>null, 'es_escuela'=>'1', 'es_posgrado'=>null,'es_direccion'=>null, 'es_oficina'=>null, 'dependencia_id'=> 13, 'es_dep_ac'=>null,'es_centro_generador'=>1,],
            ['dependencia' => 'Escuela Profesional ARQUITECTURA', 'organiza_diplomado'=>1,'es_facultad'=>null, 'es_escuela'=>'1', 'es_posgrado'=>null,'es_direccion'=>null, 'es_oficina'=>null, 'dependencia_id'=> '13', 'es_dep_ac'=>null,'es_centro_generador'=>1,],
            ['dependencia' => 'Escuela Profesional INGENIERIA INDUSTRIAL', 'organiza_diplomado'=>1,'es_facultad'=>null, 'es_escuela'=>'1', 'es_posgrado'=>null,'es_direccion'=>null, 'es_oficina'=>null, 'dependencia_id'=> 14, 'es_dep_ac'=>null,'es_centro_generador'=>1,],
            ['dependencia' => 'Escuela Profesional INGENIERIA DE SISTEMAS', 'organiza_diplomado'=>1,'es_facultad'=>null, 'es_escuela'=>'1', 'es_posgrado'=>null,'es_direccion'=>null, 'es_oficina'=>null, 'dependencia_id'=> 14, 'es_dep_ac'=>null,'es_centro_generador'=>1,],
            ['dependencia' => 'Escuela Profesional MEDICINA VETERINARIA', 'organiza_diplomado'=>1,'es_facultad'=>null, 'es_escuela'=>'1', 'es_posgrado'=>null,'es_direccion'=>null, 'es_oficina'=>null, 'dependencia_id'=> 15, 'es_dep_ac'=>null,'es_centro_generador'=>1,],
            //departamentos academicos
            ['dependencia' => 'Departamento Académico de Ingeniería Agronómica', 'organiza_diplomado'=>null,'es_facultad'=>null, 'es_escuela'=>null, 'es_posgrado'=>null, 'es_direccion'=>null, 'es_oficina'=>null, 'dependencia_id'=> 2, 'es_dep_ac'=>1,'es_centro_generador'=>null,],
            ['dependencia' => 'Departamento Académico de Ingeniería Agroindustrial', 'organiza_diplomado'=>null,'es_facultad'=>null, 'es_escuela'=>null, 'es_posgrado'=>null, 'es_direccion'=>null, 'es_oficina'=>null, 'dependencia_id'=>2, 'es_dep_ac'=>1,'es_centro_generador'=>null,],
             ['dependencia' => 'Departamento Académico de Medicina y Odontología', 'organiza_diplomado'=>null,'es_facultad'=>null, 'es_escuela'=>null, 'es_posgrado'=>null, 'es_direccion'=>null, 'es_oficina'=>null, 'dependencia_id'=>3, 'es_dep_ac'=>1,'es_centro_generador'=>null,],
            ['dependencia' => 'Departamento Académico de Psicología', 'organiza_diplomado'=>null,'es_facultad'=>null, 'es_escuela'=>null, 'es_posgrado'=>null, 'es_direccion'=>null, 'es_oficina'=>null, 'dependencia_id'=> 4, 'es_dep_ac'=>1,'es_centro_generador'=>null,],
            ['dependencia' => 'Departamento Académico de Enfermería', 'organiza_diplomado'=>null,'es_facultad'=>null, 'es_escuela'=>null, 'es_posgrado'=>null, 'es_direccion'=>null, 'es_oficina'=>null, 'dependencia_id'=> 5, 'es_dep_ac'=>1,'es_centro_generador'=>null,],
            ['dependencia' => 'Departamento Académico de Obstetricia', 'organiza_diplomado'=>null,'es_facultad'=>null, 'es_escuela'=>null, 'es_posgrado'=>null, 'es_direccion'=>null, 'es_oficina'=>null, 'dependencia_id'=> 6, 'es_dep_ac'=>1,'es_centro_generador'=>null,],
            ['dependencia' => 'Departamento Académico de Ciencias Admisnistrativas y Turismo y Hotelería', 'organiza_diplomado'=>null,'es_facultad'=>null, 'es_escuela'=>null, 'es_posgrado'=>null, 'es_direccion'=>null, 'es_oficina'=>null, 'dependencia_id'=> 7, 'es_dep_ac'=>1,'es_centro_generador'=>null,],
            ['dependencia' => 'Departamento Académico de Ciencas Contables y Financieras', 'organiza_diplomado'=>null,'es_facultad'=>null, 'es_escuela'=>null, 'es_posgrado'=>null, 'es_direccion'=>null, 'es_oficina'=>null, 'dependencia_id'=> 8, 'es_dep_ac'=>1,'es_centro_generador'=>null,],
            ['dependencia' => 'Departamento Académico de Economía', 'organiza_diplomado'=>null,'es_facultad'=>null, 'es_escuela'=>null, 'es_posgrado'=>null, 'es_direccion'=>null, 'es_oficina'=>null, 'dependencia_id'=> 9, 'es_dep_ac'=>1,'es_centro_generador'=>null,],
            ['dependencia' => 'Departamento Académico de Sociología y Ciencias de la Comunicación', 'organiza_diplomado'=>null,'es_facultad'=>null, 'es_escuela'=>null, 'es_posgrado'=>null, 'es_direccion'=>null, 'es_oficina'=>null, 'dependencia_id'=> 10, 'es_dep_ac'=>1,'es_centro_generador'=>null,],
            ['dependencia' => 'Departamento Académico Pedagógico de Ciencias Formales y Naturales', 'organiza_diplomado'=>null,'es_facultad'=>null, 'es_escuela'=>null, 'es_posgrado'=>null, 'es_direccion'=>null, 'es_oficina'=>null, 'dependencia_id'=> 11, 'es_dep_ac'=>1,'es_centro_generador'=>null,],
            ['dependencia' => 'Departamento Académico Pedagógico de Ciencias Sociales y Humanidades', 'organiza_diplomado'=>null,'es_facultad'=>null, 'es_escuela'=>null, 'es_posgrado'=>null, 'es_direccion'=>null, 'es_oficina'=>null, 'dependencia_id'=> 11, 'es_dep_ac'=>1,'es_centro_generador'=>null,],
            ['dependencia' => 'Departamento Académico de Derecho y Ciencias Políticas', 'organiza_diplomado'=>null,'es_facultad'=>null, 'es_escuela'=>null, 'es_posgrado'=>null, 'es_direccion'=>null, 'es_oficina'=>null, 'dependencia_id'=> 12, 'es_dep_ac'=>1,'es_centro_generador'=>null,],
            ['dependencia' => 'Departamento Académico de Ingeniería Civil y Arquitectura', 'organiza_diplomado'=>null,'es_facultad'=>null, 'es_escuela'=>null, 'es_posgrado'=>null, 'es_direccion'=>null, 'es_oficina'=>null, 'dependencia_id'=> 13, 'es_dep_ac'=>1,'es_centro_generador'=>null,],
            ['dependencia' => 'Departamento Académico de Ingeniería Industrial y de Sistemas', 'organiza_diplomado'=>null,'es_facultad'=>null, 'es_escuela'=>null, 'es_posgrado'=>null, 'es_direccion'=>null, 'es_oficina'=>null, 'dependencia_id'=> 14, 'es_dep_ac'=>1,'es_centro_generador'=>null,],
            ['dependencia' => 'Departamento Académico de Medicina Veterinaría', 'organiza_diplomado'=>null,'es_facultad'=>null, 'es_escuela'=>null, 'es_posgrado'=>null, 'es_direccion'=>null, 'es_oficina'=>null, 'dependencia_id'=> 15, 'es_dep_ac'=>1,'es_centro_generador'=>null,],
            //otros
            ['dependencia' => 'Dirección de Admisión', 'organiza_diplomado'=>null,'es_facultad'=>null, 'es_escuela'=>null, 'es_posgrado'=>null, 'es_direccion'=>1, 'es_oficina'=>null, 'dependencia_id'=> 1, 'es_dep_ac'=>null,'es_centro_generador'=>1,],//60
            ['dependencia' => 'CEPREVAL', 'organiza_diplomado'=>null,'es_facultad'=>null, 'es_escuela'=>null, 'es_posgrado'=>null, 'es_direccion'=>null, 'es_oficina'=>null, 'dependencia_id'=> 1, 'es_dep_ac'=>null,'es_centro_generador'=>1,],//61
            ['dependencia' => 'Escuela de Posgrado', 'organiza_diplomado'=>1,'es_facultad'=>null, 'es_escuela'=>null, 'es_posgrado'=>1, 'es_direccion'=>null, 'es_oficina'=>null, 'dependencia_id'=> null, 'es_dep_ac'=>null,'es_centro_generador'=>1,],
            ['dependencia' => 'PROCAPT', 'organiza_diplomado'=>null,'es_facultad'=>null, 'es_escuela'=>null,'es_posgrado'=>null, 'es_direccion'=>null, 'es_oficina'=>1, 'dependencia_id'=> 1, 'es_dep_ac'=>null,'es_centro_generador'=>1,],
            ['dependencia' => 'PROMASTER', 'organiza_diplomado'=>null,'es_facultad'=>null, 'es_escuela'=>null, 'es_posgrado'=>null, 'es_direccion'=>null, 'es_oficina'=>1, 'dependencia_id'=> 44, 'es_dep_ac'=>null,'es_centro_generador'=>1,]
            ]);
        //tarifarios
        DB::table('tarifarios')->insert([
            ['depencencia_id' =>60, 'descripcion' => 'Carrera Profesional de Medicina Humana, Ciencias Administrativas, Ingenieria Civil, Ciencias Contables -Nacional', 'monto'=>'350', 'es_modalidades'=>'1','es_maestria'=>null,'es_doctorado'=>null, 'es_modalidad_publico'=>'1','es_modalidad_particular'=>null, 'es_libre'=>null,'es_diplomado'=>null,'es_procapt'=>null,],
            ['depencencia_id' =>60, 'descripcion' => 'Carrera Profesional de Medicina Humana, Ciencias Administrativas, Ingenieria Civil, Ciencias Contables -Particular', 'monto'=>'400', 'es_modalidades'=>'1','es_maestria'=>null,'es_doctorado'=>null,'es_modalidad_publico'=>null, 'es_modalidad_particular'=>'1','es_libre'=>null,'es_diplomado'=>null,'es_procapt'=>null,],
            ['depencencia_id' =>60, 'descripcion' => 'Otras Carreras Profesionales - Nacional', 'monto'=>'280', 'es_modalidades'=>'1','es_maestria'=>null,'es_doctorado'=>null, 'es_modalidad_publico'=>'1','es_modalidad_particular'=>null,'es_libre'=>null,'es_diplomado'=>null,'es_procapt'=>null,],
            ['depencencia_id' =>60, 'descripcion' => 'Otras Carreras Profesionales - Particular', 'monto'=>'330', 'es_modalidades'=>'1','es_maestria'=>null,'es_doctorado'=>null,'es_modalidad_publico'=>null, 'es_modalidad_particular'=>'1','es_libre'=>null,'es_diplomado'=>null,'es_procapt'=>null,],
            ['depencencia_id' =>60, 'descripcion' => 'Postulantes libres', 'monto'=>'100', 'es_modalidades'=>'0','es_maestria'=>null,'es_doctorado'=>null,'es_modalidad_publico'=>null,'es_modalidad_particular'=>null, 'es_libre'=>'1','es_diplomado'=>null,'es_procapt'=>null,],
            ['depencencia_id' =>60, 'descripcion' => 'Primeros puestos de Educación Secundaria y Educación Básica Alternativa-Nacional', 'monto'=>'300', 'es_modalidades'=>'1','es_maestria'=>null,'es_doctorado'=>null, 'es_modalidad_publico'=>'1','es_modalidad_particular'=>null,'es_libre'=>null,'es_diplomado'=>null,'es_procapt'=>null,],
            ['depencencia_id' =>60, 'descripcion' => 'Primeros puestos de Educación Secundaria y Educación Básica Alternativa-Particular', 'monto'=>'400', 'es_modalidades'=>'1','es_maestria'=>null,'es_doctorado'=>null,'es_modalidad_publico'=>null, 'es_modalidad_particular'=>'1','es_libre'=>null,'es_diplomado'=>null,'es_procapt'=>null,],
            ['depencencia_id' =>60, 'descripcion' => 'Traslado externo Nacional e Internacional - Univ. Publica', 'monto'=>'500', 'es_modalidades'=>'1','es_maestria'=>null,'es_doctorado'=>null, 'es_modalidad_publico'=>'1','es_modalidad_particular'=>null,'es_libre'=>null,'es_diplomado'=>null,'es_procapt'=>null,],
            ['depencencia_id' =>60, 'descripcion' => 'Traslado externo Nacional e Internacional - Univ. Privada', 'monto'=>'800', 'es_modalidades'=>'1','es_maestria'=>null,'es_doctorado'=>null,'es_modalidad_publico'=>null, 'es_modalidad_particular'=>'1','es_libre'=>null,'es_diplomado'=>null,'es_procapt'=>null,],
            ['depencencia_id' =>60, 'descripcion' => 'Traslado externo Nacional e Internacional - Univ. Extranjeras', 'monto'=>'1000', 'es_modalidades'=>'1','es_maestria'=>null,'es_doctorado'=>null,'es_modalidad_publico'=>null,'es_modalidad_particular'=>null, 'es_libre'=>'0','es_diplomado'=>null,'es_procapt'=>null,],
            ['depencencia_id' =>60, 'descripcion' => 'Deportista Calificado de Alto Nivel, Nacional, Macroregional y Regional-Nacional', 'monto'=>'300', 'es_modalidades'=>'1','es_maestria'=>null,'es_doctorado'=>null, 'es_modalidad_publico'=>'1','es_modalidad_particular'=>null,'es_libre'=>null,'es_diplomado'=>null,'es_procapt'=>null,],
            ['depencencia_id' =>60, 'descripcion' => 'Deportista Calificado de Alto Nivel, Nacional, Macroregional y Regional-Particular', 'monto'=>'400', 'es_modalidades'=>'1','es_maestria'=>null,'es_doctorado'=>null,'es_modalidad_publico'=>null, 'es_modalidad_particular'=>'1','es_libre'=>null,'es_diplomado'=>null,'es_procapt'=>null,],
            ['depencencia_id' =>60, 'descripcion' => 'Graduados y/o Titulados', 'monto'=>'850', 'es_modalidades'=>'1','es_maestria'=>null,'es_doctorado'=>null,'es_modalidad_publico'=>null,'es_modalidad_particular'=>null, 'es_libre'=>'0','es_diplomado'=>null,'es_procapt'=>null,],
            ['depencencia_id' =>60, 'descripcion' => 'Traslados Internos', 'monto'=>'400', 'es_modalidades'=>'1','es_maestria'=>null,'es_doctorado'=>null,'es_modalidad_publico'=>null,'es_modalidad_particular'=>null, 'es_libre'=>'0','es_diplomado'=>null,'es_procapt'=>null,],
            ['depencencia_id' =>60, 'descripcion' => 'Victimas de terrorismo', 'monto'=>'0', 'es_modalidades'=>'1','es_maestria'=>null,'es_doctorado'=>null,'es_modalidad_publico'=>null,'es_modalidad_particular'=>null, 'es_libre'=>'0','es_diplomado'=>null,'es_procapt'=>null,],//puede haber un tarifario sin monto
            ['depencencia_id' =>60, 'descripcion' => 'Personas con Discapacidad', 'monto'=>'200', 'es_modalidades'=>'1','es_maestria'=>null,'es_doctorado'=>null,'es_modalidad_publico'=>null,'es_modalidad_particular'=>null, 'es_libre'=>'0','es_diplomado'=>null,'es_procapt'=>null,],
            ['depencencia_id' =>60, 'descripcion' => 'Hijos de campesinos y/o nativos', 'monto'=>'150', 'es_modalidades'=>'1','es_maestria'=>null,'es_doctorado'=>null,'es_modalidad_publico'=>null,'es_modalidad_particular'=>null, 'es_libre'=>'0','es_diplomado'=>null,'es_procapt'=>null,],
            ['depencencia_id' =>60, 'descripcion' => 'Licenciado de las fuerzas Armadas', 'monto'=>'200', 'es_modalidades'=>'1','es_maestria'=>null,'es_doctorado'=>null,'es_modalidad_publico'=>null,'es_modalidad_particular'=>null, 'es_libre'=>'0','es_diplomado'=>null,'es_procapt'=>null,],
            ['depencencia_id' =>60, 'descripcion' => 'Egresados del COAR', 'monto'=>'300', 'es_modalidades'=>'1','es_maestria'=>null,'es_doctorado'=>null,'es_modalidad_publico'=>null,'es_modalidad_particular'=>null, 'es_libre'=>'0','es_diplomado'=>null,'es_procapt'=>null,],
            ['depencencia_id' =>60, 'descripcion' => 'Egresados del Colegio Nacional de Aplicación de la UNHEVAL y de la I.E.A. Marino Meza Rosales', 'monto'=>'300', 'es_modalidades'=>'1','es_maestria'=>null,'es_doctorado'=>null,'es_modalidad_publico'=>null,'es_modalidad_particular'=>null, 'es_libre'=>'0','es_diplomado'=>null,'es_procapt'=>null,],
            ['depencencia_id' =>61, 'descripcion' => 'CEPREVAL Carrera Profesional de Medicina Humana -Nacional', 'monto'=>'600', 'es_modalidades'=>'1','es_maestria'=>null,'es_doctorado'=>null, 'es_modalidad_publico'=>'1','es_modalidad_particular'=>null,'es_libre'=>null,'es_diplomado'=>null,'es_procapt'=>null,],
            ['depencencia_id' =>61, 'descripcion' => 'CEPREVAL Carrera Profesional de Medicina Humana -Particular', 'monto'=>'650', 'es_modalidades'=>'1','es_maestria'=>null,'es_doctorado'=>null,'es_modalidad_publico'=>null, 'es_modalidad_particular'=>'1','es_libre'=>null,'es_diplomado'=>null,'es_procapt'=>null,],
            ['depencencia_id' =>61, 'descripcion' => 'CEPREVAL Carrera Profesional de Medicina Humana -Libre', 'monto'=>'500', 'es_modalidades'=>'0','es_maestria'=>null,'es_doctorado'=>null,'es_modalidad_publico'=>null,'es_modalidad_particular'=>null, 'es_libre'=>'1','es_diplomado'=>null,'es_procapt'=>null,],
            ['depencencia_id' =>61, 'descripcion' => 'CEPREVAL Otras Carrera Profesional -Nacional', 'monto'=>'500', 'es_modalidades'=>'1','es_maestria'=>null,'es_doctorado'=>null, 'es_modalidad_publico'=>'1', 'es_modalidad_particular'=>null,'es_libre'=>null,'es_diplomado'=>null,'es_procapt'=>null,],
            ['depencencia_id' =>61, 'descripcion' => 'CEPREVAL  Otras Carrera Profesional -Particular', 'monto'=>'550', 'es_modalidades'=>'1','es_maestria'=>null,'es_doctorado'=>null,'es_modalidad_publico'=>null, 'es_modalidad_particular'=>'1','es_libre'=>null,'es_diplomado'=>null,'es_procapt'=>null,],
            ['depencencia_id' =>61, 'descripcion' => 'CEPREVAL  Otras Carrera Profesional -Libre', 'monto'=>'400', 'es_modalidades'=>'0','es_maestria'=>null,'es_doctorado'=>null, 'es_modalidad_publico'=>null,'es_modalidad_particular'=>null,'es_libre'=>'1','es_diplomado'=>null,'es_procapt'=>null,],
            ['depencencia_id' =>61, 'descripcion' => 'CEPREVAL Preferencial Carreras Profesionales de Medicina Humana-Nacional', 'monto'=>'350', 'es_modalidades'=>'1','es_maestria'=>null,'es_doctorado'=>null,'es_modalidad_publico'=>'1','es_modalidad_particular'=>null,'es_libre'=>null,'es_diplomado'=>null,'es_procapt'=>null,],
            ['depencencia_id' =>61, 'descripcion' => 'CEPREVAL Preferencial Carreras Profesionales de Medicina Humana-Particular', 'monto'=>'400', 'es_modalidades'=>'1','es_maestria'=>null,'es_doctorado'=>null,'es_modalidad_publico'=>null, 'es_modalidad_particular'=>'1','es_libre'=>null,'es_diplomado'=>null,'es_procapt'=>null,],
            ['depencencia_id' =>61, 'descripcion' => 'CEPREVAL Preferencial Carreras Profesionales de Medicina Humana-Libre', 'monto'=>'250', 'es_modalidades'=>'0','es_maestria'=>null,'es_doctorado'=>null,'es_modalidad_publico'=>null,'es_modalidad_particular'=>null, 'es_libre'=>'1','es_diplomado'=>null,'es_procapt'=>null,],
            ['depencencia_id' =>61, 'descripcion' => 'CEPREVAL Preferencial Otras Carreras Profesionales-Nacional', 'monto'=>'280', 'es_modalidades'=>'1','es_maestria'=>null,'es_doctorado'=>null, 'es_modalidad_publico'=>'1','es_modalidad_particular'=>null,'es_libre'=>null,'es_diplomado'=>null,'es_procapt'=>null,],
            ['depencencia_id' =>61, 'descripcion' => 'CEPREVAL Preferencial Otras Carreras Profesionales-Particular', 'monto'=>'330', 'es_modalidades'=>'1','es_maestria'=>null,'es_doctorado'=>null,'es_modalidad_publico'=>null, 'es_modalidad_particular'=>'1','es_libre'=>null,'es_diplomado'=>null,'es_procapt'=>null,],
            ['depencencia_id' =>61, 'descripcion' => 'CEPREVAL Preferencial Otras Carreras Profesionales-Libre', 'monto'=>'250', 'es_modalidades'=>'0','es_maestria'=>null,'es_doctorado'=>null,'es_modalidad_publico'=>null,'es_modalidad_particular'=>null, 'es_libre'=>'1','es_diplomado'=>null,'es_procapt'=>null,],
            ['depencencia_id' =>62, 'descripcion' => 'Maestria derecho de postulacion', 'monto'=>'250', 'es_modalidades'=>'0', 'es_maestria'=>'1','es_doctorado'=>null,'es_modalidad_publico'=>null,'es_modalidad_particular'=>null,'es_libre'=>null,'es_diplomado'=>null,'es_procapt'=>null,],
            ['depencencia_id' =>62, 'descripcion' => 'Doctorado derecho de postulacion', 'monto'=>'380', 'es_modalidades'=>'0','es_maestria'=>null, 'es_doctorado'=>'1','es_modalidad_publico'=>null,'es_modalidad_particular'=>null,'es_libre'=>null,'es_diplomado'=>null,'es_procapt'=>null,],
            ['depencencia_id' =>42, 'descripcion' => 'Diplomado en Gestion por Procesos-matricula', 'monto'=>'150', 'es_modalidades'=>'0','es_maestria'=>null,'es_doctorado'=>null,'es_modalidad_publico'=>null,'es_modalidad_particular'=>null,'es_libre'=>null, 'es_diplomado'=>'1','es_procapt'=>null,],
            ['depencencia_id' =>42, 'descripcion' => 'Diplomado en Gestion por Procesos-modulo', 'monto'=>'250', 'es_modalidades'=>'0','es_maestria'=>null,'es_doctorado'=>null,'es_modalidad_publico'=>null,'es_modalidad_particular'=>null,'es_libre'=>null, 'es_diplomado'=>'1','es_procapt'=>null,],
            ['depencencia_id' =>42, 'descripcion' => 'Diplomado en Gestion por Procesos-diploma', 'monto'=>'20', 'es_modalidades'=>'0','es_maestria'=>null,'es_doctorado'=>null,'es_modalidad_publico'=>null,'es_modalidad_particular'=>null,'es_libre'=>null, 'es_diplomado'=>'1','es_procapt'=>null,],
            ['depencencia_id' =>42, 'descripcion' => 'Diplomado en Gestion por Procesos-todos módulos', 'monto'=>'650', 'es_modalidades'=>'0','es_maestria'=>null,'es_doctorado'=>null,'es_modalidad_publico'=>null,'es_modalidad_particular'=>null,'es_libre'=>null, 'es_diplomado'=>'1','es_procapt'=>null,],
            ['depencencia_id' =>42, 'descripcion' => 'Diplomado en Tics-matricula', 'monto'=>'100', 'es_modalidades'=>'0','es_maestria'=>null,'es_doctorado'=>null,'es_modalidad_publico'=>null,'es_modalidad_particular'=>null,'es_libre'=>null, 'es_diplomado'=>'1','es_procapt'=>null,],
            ['depencencia_id' =>42, 'descripcion' => 'Diplomado en Tics-modulo', 'monto'=>'300', 'es_modalidades'=>'0','es_maestria'=>null,'es_doctorado'=>null,'es_modalidad_publico'=>null,'es_modalidad_particular'=>null,'es_libre'=>null, 'es_diplomado'=>'1','es_procapt'=>null,],
            ['depencencia_id' =>42, 'descripcion' => 'Diplomado en Tics-diploma', 'monto'=>'30', 'es_modalidades'=>'0','es_maestria'=>null,'es_doctorado'=>null,'es_modalidad_publico'=>null,'es_modalidad_particular'=>null,'es_libre'=>null, 'es_diplomado'=>'1','es_procapt'=>null,],
            ['depencencia_id' =>63, 'descripcion' => 'PROCAPT-matricula', 'monto'=>'500', 'es_modalidades'=>'0','es_maestria'=>null,'es_doctorado'=>null,'es_modalidad_publico'=>null,'es_modalidad_particular'=>null,'es_libre'=>null,'es_diplomado'=>null, 'es_procapt'=>'1',],
            ['depencencia_id' =>63, 'descripcion' => 'PROCAPT-modulo', 'monto'=>'700', 'es_modalidades'=>'0','es_maestria'=>null,'es_doctorado'=>null,'es_modalidad_publico'=>null,'es_modalidad_particular'=>null,'es_libre'=>null,'es_diplomado'=>null, 'es_procapt'=>'1',],
            ['depencencia_id' =>64, 'descripcion' => 'PROMASTER-matricula', 'monto'=>'500', 'es_modalidades'=>'0','es_maestria'=>null,'es_doctorado'=>null, 'es_modalidad_publico'=>null,'es_modalidad_particular'=>null,'es_libre'=>null,'es_diplomado'=>null,'es_procapt'=>null,],
            ['depencencia_id' =>64, 'descripcion' => 'PROMASTER-modulo', 'monto'=>'900', 'es_modalidades'=>'0','es_maestria'=>null,'es_doctorado'=>null, 'es_modalidad_publico'=>null,'es_modalidad_particular'=>null,'es_libre'=>null,'es_diplomado'=>null,'es_procapt'=>null,]

            ]);

        //pagos
        DB::table('pagos')->insert([
            ['num_comprobante' => '1234567', 'fecha_comprobante' => '2018-05-21','user_id'=> 10,'tarifario_id'=> 1, 'importe'=> '350', 'estado_recibo'=> 0,],
            ['num_comprobante' => '1234566', 'fecha_comprobante' => '2018-05-21','user_id'=> 11,'tarifario_id'=> 21, 'importe'=> '600', 'estado_recibo'=> 0,],

            ['num_comprobante' => '1111111', 'fecha_comprobante' => '2018-05-21','user_id'=> 12,'tarifario_id'=> 35, 'importe'=> '150', 'estado_recibo'=> 1,],
            ['num_comprobante' => '2222222', 'fecha_comprobante' => '2018-05-21','user_id'=> 12,'tarifario_id'=> 36, 'importe'=> '250', 'estado_recibo'=> 1,],
            ['num_comprobante' => '3333333', 'fecha_comprobante' => '2018-05-21','user_id'=> 12,'tarifario_id'=> 37, 'importe'=> '20', 'estado_recibo'=> 1,],

            ['num_comprobante' => '4444444', 'fecha_comprobante' => '2018-05-21','user_id'=> 13,'tarifario_id'=> 42, 'importe'=> '500', 'estado_recibo'=> 1,],
            ['num_comprobante' => '5555555', 'fecha_comprobante' => '2018-05-21','user_id'=> 13,'tarifario_id'=> 43, 'importe'=> '700', 'estado_recibo'=> 1,],

            ['num_comprobante' => '1111222', 'fecha_comprobante' => '2018-05-21','user_id'=> 14,'tarifario_id'=> 35, 'importe'=> '150', 'estado_recibo'=> 0,],

            ['num_comprobante' => '1111333', 'fecha_comprobante' => '2018-05-21','user_id'=> 15,'tarifario_id'=> 35, 'importe'=> '150', 'estado_recibo'=> 0,],

            ['num_comprobante' => '1111444', 'fecha_comprobante' => '2018-05-21','user_id'=> 16,'tarifario_id'=> 39, 'importe'=> '100', 'estado_recibo'=> 1,],//10
            ['num_comprobante' => '2222555', 'fecha_comprobante' => '2018-05-21','user_id'=> 16,'tarifario_id'=> 40, 'importe'=> 250, 'estado_recibo'=> 1,],//11

            ['num_comprobante' => '3333555', 'fecha_comprobante' => '2018-05-21','user_id'=> 17,'tarifario_id'=> 35, 'importe'=> 150, 'estado_recibo'=> 1,],
            ['num_comprobante' => '1111555', 'fecha_comprobante' => '2018-05-21','user_id'=> 17,'tarifario_id'=> 36, 'importe'=> '200', 'estado_recibo'=> 1,],
            ['num_comprobante' => '2222666', 'fecha_comprobante' => '2018-05-21','user_id'=> 17,'tarifario_id'=> 36, 'importe'=> '200', 'estado_recibo'=> 1,],

            ['num_comprobante' => '3333666', 'fecha_comprobante' => '2018-05-21','user_id'=> 18,'tarifario_id'=> 39, 'importe'=> 100, 'estado_recibo'=> 1,],
            ['num_comprobante' => '1111666', 'fecha_comprobante' => '2018-05-21','user_id'=> 18,'tarifario_id'=> 40, 'importe'=> 300, 'estado_recibo'=> 1,],
            ['num_comprobante' => '1111777', 'fecha_comprobante' => '2018-05-21','user_id'=> 18,'tarifario_id'=> 40, 'importe'=> 300, 'estado_recibo'=> 1,],

            ['num_comprobante' => '2222777', 'fecha_comprobante' => '2018-05-21','user_id'=> 18,'tarifario_id'=> 35, 'importe'=> 150, 'estado_recibo'=> 1,],
            ['num_comprobante' => '3333777', 'fecha_comprobante' => '2018-05-21','user_id'=> 18,'tarifario_id'=> 36, 'importe'=> 250, 'estado_recibo'=> 1,],
            ['num_comprobante' => '2222888', 'fecha_comprobante' => '2018-05-21','user_id'=> 18,'tarifario_id'=> 36, 'importe'=> 250, 'estado_recibo'=> 1,],//20

            ['num_comprobante' => '1111888', 'fecha_comprobante' => '2018-05-21','user_id'=> 19,'tarifario_id'=> 35, 'importe'=> 150, 'estado_recibo'=> 1,],
            ['num_comprobante' => '2222999', 'fecha_comprobante' => '2018-05-21','user_id'=> 19,'tarifario_id'=> 38, 'importe'=> 650, 'estado_recibo'=> 1,],

            ['num_comprobante' => '2222444', 'fecha_comprobante' => '2018-05-21','user_id'=> 20,'tarifario_id'=> 35, 'importe'=> 150, 'estado_recibo'=> 0,],

            ['num_comprobante' => '3333111', 'fecha_comprobante' => '2018-05-21','user_id'=> 21,'tarifario_id'=> 3, 'importe'=> 280, 'estado_recibo'=> 1,],
            ['num_comprobante' => '3333222', 'fecha_comprobante' => '2018-05-21','user_id'=> 22,'tarifario_id'=> 24, 'importe'=> 500, 'estado_recibo'=> 1,],
            ['num_comprobante' => '3333444', 'fecha_comprobante' => '2018-05-21','user_id'=> 23,'tarifario_id'=> 44, 'importe'=> 500, 'estado_recibo'=> 1,],
            ['num_comprobante' => '5555444', 'fecha_comprobante' => '2018-05-21','user_id'=> 9,'tarifario_id'=> 33, 'importe'=> 250, 'estado_recibo'=> 1,]//27
        ]);

        //programa_ncgt
        DB::table('programa_ncgts')->insert([
            //Diplomados
            ['programa_id' => '11', 'descripcion' => 'Diplomado en Gestion por Procesos', 'fecha_inicio'=> '2018-04-20', 'fecha_fin'=> '2018-06-20', 'horas'=> '100',
            'numero_modulo'=> '3',  'costo_matricula'=> '150', 'costo_modulo'=> '250', 'costo_diploma'=> '20', 'descuento_interno' => '50', 'descuento_modulo_total'=> '100', 'dependencia_id'=> 42,],
            ['programa_id' => '11', 'descripcion' => 'Diplomado en Tics', 'fecha_inicio'=> '2018-04-20', 'fecha_fin'=> '2018-06-20', 'horas'=> '150',
            'numero_modulo'=> '4',  'costo_matricula'=> '100', 'costo_modulo'=> '300', 'costo_diploma'=> '30', 'descuento_interno' => '50', 'descuento_modulo_total'=> '100', 'dependencia_id'=> 42,],
            //Programas de PROCAPT
            ['programa_id' => '9', 'descripcion' => 'PROCAPT INGENIERIA DE SISTEMAS', 'fecha_inicio'=> null, 'fecha_fin'=> null, 'horas'=> null,
            'numero_modulo'=> '3', 'costo_matricula'=> '500', 'costo_modulo'=> '700', 'costo_diploma'=> null, 'descuento_interno' => null, 'descuento_modulo_total'=> null, 'dependencia_id'=> 42,],
            ['programa_id' => '9', 'descripcion' => 'PROCAPT INGENIERIA AGRONOMICA', 'fecha_inicio'=> null, 'fecha_fin'=> null, 'horas'=> null,
            'numero_modulo'=> '3', 'costo_matricula'=> '500', 'costo_modulo'=> '700', 'costo_diploma'=> null, 'descuento_interno' => null, 'descuento_modulo_total'=> null, 'dependencia_id'=> 16,],
            ['programa_id' => '9', 'descripcion' => 'PROCAPT INGENIERIA AGROINDUSTRIAL', 'fecha_inicio'=> null, 'fecha_fin'=> null, 'horas'=> null,
            'numero_modulo'=> '3', 'costo_matricula'=> '500', 'costo_modulo'=> '700', 'costo_diploma'=> null, 'descuento_interno' => null, 'descuento_modulo_total'=> null, 'dependencia_id'=> 17,],
            ['programa_id' => '9', 'descripcion' => 'PROCAPT MEDICINA HUMANA', 'fecha_inicio'=> null, 'fecha_fin'=> null, 'horas'=> null,
            'numero_modulo'=> '3', 'costo_matricula'=> '500', 'costo_modulo'=> '700', 'costo_diploma'=> null, 'descuento_interno' => null, 'descuento_modulo_total'=> null, 'dependencia_id'=> 19,],
            ['programa_id' => '9', 'descripcion' => 'PROCAPT ODONTOLOGIA', 'fecha_inicio'=> null, 'fecha_fin'=> null, 'horas'=> null,
                'numero_modulo'=> '3', 'costo_matricula'=> '500', 'costo_modulo'=> '700', 'costo_diploma'=> null, 'descuento_interno' => null, 'descuento_modulo_total'=> null, 'dependencia_id'=> 20,],
            ['programa_id' => '9', 'descripcion' => 'PROCAPT PSICOLOGIA', 'fecha_inicio'=> null, 'fecha_fin'=> null, 'horas'=> null,
                'numero_modulo'=> '3', 'costo_matricula'=> '500', 'costo_modulo'=> '700', 'costo_diploma'=> null, 'descuento_interno' => null, 'descuento_modulo_total'=> null, 'dependencia_id'=> 21,],
            ['programa_id' => '9', 'descripcion' => 'PROCAPT ENFERMERIA', 'fecha_inicio'=> null, 'fecha_fin'=> null, 'horas'=> null,
                'numero_modulo'=> '3', 'costo_matricula'=> '500', 'costo_modulo'=> '700', 'costo_diploma'=> null, 'descuento_interno' => null, 'descuento_modulo_total'=> null, 'dependencia_id'=> 22,],
            ['programa_id' => '9', 'descripcion' => 'PROCAPT OBSTETRICIA', 'fecha_inicio'=> null, 'fecha_fin'=> null, 'horas'=> null,
                'numero_modulo'=> '3', 'costo_matricula'=> '500', 'costo_modulo'=> '700', 'costo_diploma'=> null, 'descuento_interno' => null, 'descuento_modulo_total'=> null, 'dependencia_id'=> 23,],
            ['programa_id' => '9', 'descripcion' => 'PROCAPT CIENCIAS ADMINISTRATIVAS', 'fecha_inicio'=> null, 'fecha_fin'=> null, 'horas'=> null,
                'numero_modulo'=> '3', 'costo_matricula'=> '500', 'costo_modulo'=> '700', 'costo_diploma'=> null, 'descuento_interno' => null, 'descuento_modulo_total'=> null, 'dependencia_id'=> 24,],
            ['programa_id' => '9', 'descripcion' => 'PROCAPT TURISMO Y HOTELERIA', 'fecha_inicio'=> null, 'fecha_fin'=> null, 'horas'=> null,
                'numero_modulo'=> '3', 'costo_matricula'=> '500', 'costo_modulo'=> '700', 'costo_diploma'=> null, 'descuento_interno' => null, 'descuento_modulo_total'=> null, 'dependencia_id'=> 25,],
            ['programa_id' => '9', 'descripcion' => 'PROCAPT CIENCIAS CONTABLES Y FINANCIERAS', 'fecha_inicio'=> null, 'fecha_fin'=> null, 'horas'=> null,
                'numero_modulo'=> '3', 'costo_matricula'=> '500', 'costo_modulo'=> '700', 'costo_diploma'=> null, 'descuento_interno' => null, 'descuento_modulo_total'=> null, 'dependencia_id'=> 26,],
            ['programa_id' => '9', 'descripcion' => 'PROCAPT ECONOMIA', 'fecha_inicio'=> null, 'fecha_fin'=> null, 'horas'=> null,
                'numero_modulo'=> '3', 'costo_matricula'=> '500', 'costo_modulo'=> '700', 'costo_diploma'=> null, 'descuento_interno' => null, 'descuento_modulo_total'=> null, 'dependencia_id'=> 27,],
            ['programa_id' => '9', 'descripcion' => 'PROCAPT SOCIOLOGIA', 'fecha_inicio'=> null, 'fecha_fin'=> null, 'horas'=> null,
                'numero_modulo'=> '3', 'costo_matricula'=> '500', 'costo_modulo'=> '700', 'costo_diploma'=> null, 'descuento_interno' => null, 'descuento_modulo_total'=> null, 'dependencia_id'=> 28,],
            ['programa_id' => '9', 'descripcion' => 'PROCAPT CIENCIAS DE LA COMUNICACION SOCIAL', 'fecha_inicio'=> null, 'fecha_fin'=> null, 'horas'=> null,
                'numero_modulo'=> '3', 'costo_matricula'=> '500', 'costo_modulo'=> '700', 'costo_diploma'=> null, 'descuento_interno' => null, 'descuento_modulo_total'=> null, 'dependencia_id'=> 29,],
            ['programa_id' => '9', 'descripcion' => 'PROCAPT EDUCACION INICIAL', 'fecha_inicio'=> null, 'fecha_fin'=> null, 'horas'=> null,
                'numero_modulo'=> '3', 'costo_matricula'=> '500', 'costo_modulo'=> '700', 'costo_diploma'=> null, 'descuento_interno' => null, 'descuento_modulo_total'=> null, 'dependencia_id'=> 30,],
            ['programa_id' => '9', 'descripcion' => 'PROCAPT EDUCACION PRIMARIA', 'fecha_inicio'=> null, 'fecha_fin'=> null, 'horas'=> null,
                'numero_modulo'=> '3', 'costo_matricula'=> '500', 'costo_modulo'=> '700', 'costo_diploma'=> null, 'descuento_interno' => null, 'descuento_modulo_total'=> null, 'dependencia_id'=> 31,],
            ['programa_id' => '9', 'descripcion' => 'PROCAPT EDUCACION FISICA', 'fecha_inicio'=> null, 'fecha_fin'=> null, 'horas'=> null,
                'numero_modulo'=> '3', 'costo_matricula'=> '500', 'costo_modulo'=> '700', 'costo_diploma'=> null, 'descuento_interno' => null, 'descuento_modulo_total'=> null, 'dependencia_id'=> 32,],
            ['programa_id' => '9', 'descripcion' => 'PROCAPT FILOSOFIA, PSICOLOGIA Y CIENCIAS SOCIALES', 'fecha_inicio'=> null, 'fecha_fin'=> null, 'horas'=> null,
                'numero_modulo'=> '3', 'costo_matricula'=> '500', 'costo_modulo'=> '700', 'costo_diploma'=> null, 'descuento_interno' => null, 'descuento_modulo_total'=> null, 'dependencia_id'=> 33,],
            ['programa_id' => '9', 'descripcion' => 'PROCAPT LENGUA Y LITERATURA', 'fecha_inicio'=> null, 'fecha_fin'=> null, 'horas'=> null,
                'numero_modulo'=> '3', 'costo_matricula'=> '500', 'costo_modulo'=> '700', 'costo_diploma'=> null, 'descuento_interno' => null, 'descuento_modulo_total'=> null, 'dependencia_id'=> 34,],
            ['programa_id' => '9', 'descripcion' => 'PROCAPT CIENCIAS HISTORICO SOCIALES Y GEOGRAFICAS', 'fecha_inicio'=> null, 'fecha_fin'=> null, 'horas'=> null,
                'numero_modulo'=> '3', 'costo_matricula'=> '500', 'costo_modulo'=> '700', 'costo_diploma'=> null, 'descuento_interno' => null, 'descuento_modulo_total'=> null, 'dependencia_id'=> 35,],
            ['programa_id' => '9', 'descripcion' => 'PROCAPT MATEMATICA Y FISICA', 'fecha_inicio'=> null, 'fecha_fin'=> null, 'horas'=> null,
                'numero_modulo'=> '3', 'costo_matricula'=> '500', 'costo_modulo'=> '700', 'costo_diploma'=> null, 'descuento_interno' => null, 'descuento_modulo_total'=> null, 'dependencia_id'=> 36,],
            ['programa_id' => '9', 'descripcion' => 'PROCAPT BIOLOGIA, QUIMICA Y CIENCIA DEL AMBIENTE', 'fecha_inicio'=> null, 'fecha_fin'=> null, 'horas'=> null,
                'numero_modulo'=> '3', 'costo_matricula'=> '500', 'costo_modulo'=> '700', 'costo_diploma'=> null, 'descuento_interno' => null, 'descuento_modulo_total'=> null, 'dependencia_id'=> 37,],
            ['programa_id' => '9', 'descripcion' => 'PROCAPT DERECHO Y CIENCIAS POLITICAS', 'fecha_inicio'=> null, 'fecha_fin'=> null, 'horas'=> null,
                'numero_modulo'=> '3', 'costo_matricula'=> '500', 'costo_modulo'=> '700', 'costo_diploma'=> null, 'descuento_interno' => null, 'descuento_modulo_total'=> null, 'dependencia_id'=> 38,],
            ['programa_id' => '9', 'descripcion' => 'PROCAPT INGENIERIA CIVIL', 'fecha_inicio'=> null, 'fecha_fin'=> null, 'horas'=> null,
                'numero_modulo'=> '3', 'costo_matricula'=> '500', 'costo_modulo'=> '700', 'costo_diploma'=> null, 'descuento_interno' => null, 'descuento_modulo_total'=> null, 'dependencia_id'=> 39,],
            ['programa_id' => '9', 'descripcion' => 'PROCAPT ARQUITECTURA', 'fecha_inicio'=> null, 'fecha_fin'=> null, 'horas'=> null,
                'numero_modulo'=> '3', 'costo_matricula'=> '500', 'costo_modulo'=> '700', 'costo_diploma'=> null, 'descuento_interno' => null, 'descuento_modulo_total'=> null, 'dependencia_id'=> 40,],
            ['programa_id' => '9', 'descripcion' => 'PROCAPT INGENIERIA INDUSTRIAL', 'fecha_inicio'=> null, 'fecha_fin'=> null, 'horas'=> null,
                'numero_modulo'=> '3', 'costo_matricula'=> '500', 'costo_modulo'=> '700', 'costo_diploma'=> null, 'descuento_interno' => null, 'descuento_modulo_total'=> null, 'dependencia_id'=> 41,],
            ['programa_id' => '9', 'descripcion' => 'PROCAPT MEDICINA VETERINARIA', 'fecha_inicio'=> null, 'fecha_fin'=> null, 'horas'=> null,
                'numero_modulo'=> '3', 'costo_matricula'=> '500', 'costo_modulo'=> '700', 'costo_diploma'=> null, 'descuento_interno' => null, 'descuento_modulo_total'=> null, 'dependencia_id'=> 43,],
            //PROMASTER
            ['programa_id' => '10', 'descripcion' => 'PROMASTER Ingenieria de Sistemas mencion TICs', 'fecha_inicio'=> null, 'fecha_fin'=> null, 'horas'=> null,
            'numero_modulo'=> '3', 'costo_matricula'=> '500', 'costo_modulo'=> '900', 'costo_diploma'=> null, 'descuento_interno' => null, 'descuento_modulo_total'=> null, 'dependencia_id'=> 46,]
        ]);
        //modulo_ncgts
        DB::table('modulo_ncgts')->insert([
            ['nombre' => 'Gestion por procesos', 'descripcion' => 'Presenta la diferencia entre el enfoque funcional y el enfoque de procesos',
                'docente'=>'Juan Perez Martel', 'programa_ncgt_id'=>'1',],
            ['nombre' => 'Estadistica aplicada a los procesos', 'descripcion' => 'El curso proporciona las bases estadísticas para poder representar y manipular las variables cuantitativas de los procesos',
               'docente'=>'Maria Palacios Roldan', 'programa_ncgt_id'=>'1',],
            ['nombre' => 'Modelamiento de procesos', 'descripcion' => ' presenta diferentes metodologías que permiten modelar los procesos de la organización con el fin de entender y gestionar el comportamiento',
                'docente'=>'Mario Riquelme', 'programa_ncgt_id'=>'1',]
                
        ]);
         //inscripcion_ncgts
        DB::table('inscripcion_ncgts')->insert([
                ['user_id' => 12, 'programa_ncgt_id' => 1,],//inscripcion de pedro a diplomado procesos
                ['user_id' => 13, 'programa_ncgt_id' => 3,],
                ['user_id' => 16, 'programa_ncgt_id' => 2,],
                ['user_id' => 17, 'programa_ncgt_id' => 1,],
                ['user_id' => 18, 'programa_ncgt_id' => 2,],
                ['user_id' => 18, 'programa_ncgt_id' => 1,],
                ['user_id' => 19, 'programa_ncgt_id' => 1,],
                ['user_id' => 23, 'programa_ncgt_id' => 30,]
        ]);

        //control pago
        DB::table('control_pagos')->insert([
                ['inscripcion_ncgt_id' => 1, 'postulacion_id' => null,'pago_id' => '3','tipo'=> '1',],//tipo 1 = matricula
                ['inscripcion_ncgt_id' => 1, 'postulacion_id' => null,'pago_id' => '4','tipo'=> '2',],//tipo 2 = modulo
                ['inscripcion_ncgt_id' => 1, 'postulacion_id' => null,'pago_id' => '5','tipo'=> '3',],//tipo 3 = diploma

                ['inscripcion_ncgt_id' => 2, 'postulacion_id' => null,'pago_id' => 6,'tipo'=> 1,],//inscripcions procapt
                ['inscripcion_ncgt_id' => 2, 'postulacion_id' => null,'pago_id' => 7,'tipo'=> 2,],//modulo PROCATP

                ['inscripcion_ncgt_id' => 3, 'postulacion_id' => null,'pago_id' => 10,'tipo'=> 1,],//matricula TICs
                ['inscripcion_ncgt_id' => 3, 'postulacion_id' => null,'pago_id' => 11,'tipo'=> 2,],//modulo TICs

                ['inscripcion_ncgt_id' => 4, 'postulacion_id' => null,'pago_id' => 12,'tipo'=> 1,],//matricula procesos
                ['inscripcion_ncgt_id' => 4, 'postulacion_id' => null,'pago_id' => 13,'tipo'=> 2,],//modulo procesos
                ['inscripcion_ncgt_id' => 4, 'postulacion_id' => null,'pago_id' => 14,'tipo'=> 2,],//modulo procesos

                ['inscripcion_ncgt_id' => 5, 'postulacion_id' => null,'pago_id' => 15,'tipo'=> 1,],//matricula tics
                ['inscripcion_ncgt_id' => 5, 'postulacion_id' => null,'pago_id' => 16,'tipo'=> 2,],//modulo tics
                ['inscripcion_ncgt_id' => 5, 'postulacion_id' => null,'pago_id' => 17,'tipo'=> 2,],//modulo tics

                ['inscripcion_ncgt_id' => 6, 'postulacion_id' => null,'pago_id' => 18,'tipo'=> 1,],//matricula procesos
                ['inscripcion_ncgt_id' => 6, 'postulacion_id' => null,'pago_id' => 19,'tipo'=> 2,],//modulo procesos
                ['inscripcion_ncgt_id' => 6, 'postulacion_id' => null,'pago_id' => 20,'tipo'=> 2,],//modulo procesos

                ['inscripcion_ncgt_id' => 7, 'postulacion_id' => null,'pago_id' => 21,'tipo'=> 1,],//matricula procesos
                ['inscripcion_ncgt_id' => 7, 'postulacion_id' => null,'pago_id' => 22,'tipo'=> 2,],//modulo procesos
                
                ['inscripcion_ncgt_id' => 8, 'postulacion_id' => null,'pago_id' => 26,'tipo'=> 1,],//inscripcions promaster

                ['inscripcion_ncgt_id' => null, 'postulacion_id' => 1,'pago_id' => 24,'tipo'=> 1,],
                ['inscripcion_ncgt_id' => null, 'postulacion_id' => 2,'pago_id' => 25,'tipo'=> 1,],
                ['inscripcion_ncgt_id' => null, 'postulacion_id' => 3,'pago_id' => 27,'tipo'=> 1,]
        ]);

        //inscripcion_modulo
        DB::table('inscripcion_modulos')->insert([
                ['inscripcion_modulo' => 'OFIMÁTICA',],
                ['inscripcion_modulo' => 'DISEÑO GRÁFICO',],
                ['inscripcion_modulo' => 'OFIMÁTICA AVANZADO',],
                ['inscripcion_modulo' => 'DISEÑO WEB',],
                ['inscripcion_modulo' => 'EDICION DE VIDEOS',],
                ['inscripcion_modulo' => 'ENSAMBLAJES Y MANTENIMIENTO DE PC´S',],
                ['inscripcion_modulo' => 'AUTOCAD',],
                ['inscripcion_modulo' => 'PROGRAMACIÓN JAVA',],
                ['inscripcion_modulo' => 'DISEÑO DE VIDEO JUEGOS',],
                ['inscripcion_modulo' => 'ROBÓTICA BÁSICA CON ARDUINO',],
                ['inscripcion_modulo' => 'DESARROLLO DE SISTEMAS WEB',],
                ['inscripcion_modulo' => 'ANIMACIÓN 3D',],
                ['inscripcion_modulo' => 'ADMINISTRACIÓN DE REDES',],
                ['inscripcion_modulo' => 'DISEÑO ARQUITECTONICO',],
                ['inscripcion_modulo' => 'DESARROLLO DE APLICACIONES MÓVILES',],
                ['inscripcion_modulo' => 'DESARROLLO DE VIDEOJUEGOS',],                                   
                ['inscripcion_modulo' => 'NO APLICA',]                
            ]);
        //inscripcion_curso
        DB::table('inscripcion_cursos')->insert([
                ['inscripcion_curso' => 'TIC´S', 'inscripcion_modulo_id' => '1',],
                ['inscripcion_curso' => 'Word', 'inscripcion_modulo_id' => '1',],
                ['inscripcion_curso' => 'Excel', 'inscripcion_modulo_id' => '1',],
                ['inscripcion_curso' => 'Power Point', 'inscripcion_modulo_id' => '1',],
                ['inscripcion_curso' => 'Corel Draw', 'inscripcion_modulo_id' => '2',],
                ['inscripcion_curso' => 'Adobe Photoshop', 'inscripcion_modulo_id' => '2',],
                ['inscripcion_curso' => 'Adobe  Indesing', 'inscripcion_modulo_id' => '2',],
                ['inscripcion_curso' => 'Adobe Muse', 'inscripcion_modulo_id' => '2',],
                ['inscripcion_curso' => 'Excel Profesional', 'inscripcion_modulo_id' => '3',],
                ['inscripcion_curso' => 'Excel y Visual Basic', 'inscripcion_modulo_id' => '3',],
                ['inscripcion_curso' => 'Acces', 'inscripcion_modulo_id' => '3',],
                ['inscripcion_curso' => 'MS Project', 'inscripcion_modulo_id' => '3',],
                ['inscripcion_curso' => 'HTML y CSS', 'inscripcion_modulo_id' => '4',],
                ['inscripcion_curso' => 'Bootstrap', 'inscripcion_modulo_id' => '4',],
                ['inscripcion_curso' => 'Adobe Animate', 'inscripcion_modulo_id' => '4',],
                ['inscripcion_curso' => 'Java Script Y Jquery', 'inscripcion_modulo_id' => '4',],
                ['inscripcion_curso' => 'Sony Vegas', 'inscripcion_modulo_id' => '5',],
                ['inscripcion_curso' => 'Adobe Premier', 'inscripcion_modulo_id' => '5',],
                ['inscripcion_curso' => 'Adobe After Effects', 'inscripcion_modulo_id' => '5',],
                ['inscripcion_curso' => 'Taller Multimedia', 'inscripcion_modulo_id' => '5',],
                ['inscripcion_curso' => 'Ensamblajes de Pc´s', 'inscripcion_modulo_id' => '6',],
                ['inscripcion_curso' => 'Mantenimiento de Pc´s', 'inscripcion_modulo_id' => '6',],
                ['inscripcion_curso' => 'Software de Utilitarios', 'inscripcion_modulo_id' => '6',],
                ['inscripcion_curso' => 'Diagnóstico y Reparación de Pc´s', 'inscripcion_modulo_id' => '6',],
                ['inscripcion_curso' => 'AUTOCAD Básico', 'inscripcion_modulo_id' => '7',],
                ['inscripcion_curso' => 'AUTOCAD Intermedio', 'inscripcion_modulo_id' => '7',],
                ['inscripcion_curso' => 'AUTOCAD Avanzado', 'inscripcion_modulo_id' => '7',],
                ['inscripcion_curso' => '3D STUDIO MAX', 'inscripcion_modulo_id' => '7',],
                ['inscripcion_curso' => 'Fundamentos de Programación', 'inscripcion_modulo_id' => '8',],
                ['inscripcion_curso' => 'Aplicaciones de Escritorio', 'inscripcion_modulo_id' => '8',],
                ['inscripcion_curso' => 'Aplicaciones Web', 'inscripcion_modulo_id' => '8',],
                ['inscripcion_curso' => 'Gestión de Base de Datos con MYSQL', 'inscripcion_modulo_id' => '8',],
                ['inscripcion_curso' => 'SCRATCH Básico', 'inscripcion_modulo_id' => '9',],
                ['inscripcion_curso' => 'SCRATCH Avanzado', 'inscripcion_modulo_id' => '9',],
                ['inscripcion_curso' => 'KODU GAME LAB Básico', 'inscripcion_modulo_id' => '9',],
                ['inscripcion_curso' => 'KODU GAME LAB Avanzado', 'inscripcion_modulo_id' => '9',],
                ['inscripcion_curso' => 'Programación Mblock', 'inscripcion_modulo_id' => '10',],
                ['inscripcion_curso' => 'Sensortes de ARDUINO', 'inscripcion_modulo_id' => '10',],
                ['inscripcion_curso' => 'Robótica con ARDUINO', 'inscripcion_modulo_id' => '10',],
                ['inscripcion_curso' => 'Proyecto Robot con ARDUINO', 'inscripcion_modulo_id' => '10',],
                ['inscripcion_curso' => 'Fundamentos de Programación con PHP', 'inscripcion_modulo_id' => '11',],
                ['inscripcion_curso' => 'Gestión de Base de Datos con MYSQL', 'inscripcion_modulo_id' => '11',],
                ['inscripcion_curso' => 'Sistema Web con PHP y MYSQL', 'inscripcion_modulo_id' => '11',],
                ['inscripcion_curso' => 'Proyecto de Sistema Web', 'inscripcion_modulo_id' => '11',],
                ['inscripcion_curso' => 'Cinema 4D Básico', 'inscripcion_modulo_id' => '12',],
                ['inscripcion_curso' => 'Cinema 4D Avanzado', 'inscripcion_modulo_id' => '12',],
                ['inscripcion_curso' => '3D Studio Max Básico', 'inscripcion_modulo_id' => '12',],
                ['inscripcion_curso' => '3D Studio Max Avanzado', 'inscripcion_modulo_id' => '12',],
                ['inscripcion_curso' => 'Conectividad y Cableado Estructurado', 'inscripcion_modulo_id' => '13',],
                ['inscripcion_curso' => 'Redes Inalambricas y Antenas', 'inscripcion_modulo_id' => '13',],
                ['inscripcion_curso' => 'Instalación y Virtalización de Servidores', 'inscripcion_modulo_id' => '13',],
                ['inscripcion_curso' => 'Administración de Red', 'inscripcion_modulo_id' => '13',],
                ['inscripcion_curso' => 'ARCHICAD Básico', 'inscripcion_modulo_id' => '14',],
                ['inscripcion_curso' => 'ARCHICAD Intermedio', 'inscripcion_modulo_id' => '14',],
                ['inscripcion_curso' => 'ARCHICAD Avanzado', 'inscripcion_modulo_id' => '14',],
                ['inscripcion_curso' => 'Integración con 3D Stuio Max', 'inscripcion_modulo_id' => '14',],
                ['inscripcion_curso' => 'App Inventor', 'inscripcion_modulo_id' => '15',],
                ['inscripcion_curso' => 'Android Básico', 'inscripcion_modulo_id' => '15',],
                ['inscripcion_curso' => 'Android Avanzado', 'inscripcion_modulo_id' => '15',],
                ['inscripcion_curso' => 'Proyecto Aplicación Móvil', 'inscripcion_modulo_id' => '15',],
                ['inscripcion_curso' => 'Unreal Development kit Básico', 'inscripcion_modulo_id' => '16',],
                ['inscripcion_curso' => 'Unreal Development kit Avanzado', 'inscripcion_modulo_id' => '16',],
                ['inscripcion_curso' => 'Unity Básico', 'inscripcion_modulo_id' => '16',],
                ['inscripcion_curso' => 'Unity Avanzado', 'inscripcion_modulo_id' => '16',],
                ['inscripcion_curso' => 'Ingles', 'inscripcion_modulo_id' => '17',],
                ['inscripcion_curso' => 'Quechua', 'inscripcion_modulo_id' => '17',],
                ['inscripcion_curso' => 'Portugues', 'inscripcion_modulo_id' => '17',],
                ['inscripcion_curso' => 'Italiano', 'inscripcion_modulo_id' => '17',],
                ['inscripcion_curso' => 'Frances', 'inscripcion_modulo_id' => '17',]               
            ]);
        //docentes_otros

      /*  DB::table('docentes_otros')->insert([
                ['user_id' => '1', 'fecha_ingreso' => '12/12/2010', 'carga' => '20',],                
                ['user_id' => '2', 'fecha_ingreso' => '12/12/2009', 'carga' => '30',]             
            ]);
        //inscripcion turno
        DB::table('inscripcion_curso_disponibles')->insert([
                
                ['ciclo' => '1', 'grupo' => '1', 'inscripcion_curso_id' => '1', 'user_id' => '4', 'inscripcion_nivel_id'=> '1', 'idioma_tipo_id'=> '1',],                               
                ['ciclo' => '2', 'grupo' => '2', 'inscripcion_curso_id' => '1', 'user_id' => '5', 'inscripcion_nivel_id'=> '1', 'idioma_tipo_id'=> '1',]                
            ]);*/     
                    
    }
}
