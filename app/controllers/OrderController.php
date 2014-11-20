<?php

class OrderController extends \BaseController {

	public function show()
	{
		$data = array("order" => array('id' => 'KD9164012014111','lote' => '12345','name' => 'CONJUNTO PISO TOLVA KOMATSU 930E-4 FASE 9 CAPACIDAD 164 m3 FORMATO ARMADA'),
                      "products" => array(
                          array('id' => 'KD9164012014111','name' => 'PLANCHAS PISO TOLVA KOMATSU 930E-4 FASE 9 CAPACIDAD 164 m3 FORMATO ARMADA','scaned' => 0),
                          array('id' => 'KD9164012014111','name' => 'PLANCHAS PISO TOLVA KOMATSU 930E-4 FASE 9 CAPACIDAD 164 m3 FORMATO ARMADA','scaned' => 0),
                          array('id' => 'KD9164012014111','name' => 'PLANCHAS PISO TOLVA KOMATSU 930E-4 FASE 9 CAPACIDAD 164 m3 FORMATO ARMADA','scaned' => 0),
                          array('id' => 'KD9164012014111','name' => 'PLANCHAS PISO TOLVA KOMATSU 930E-4 FASE 9 CAPACIDAD 164 m3 FORMATO ARMADA','scaned' => 0),
                          array('id' => 'KD9164012014111','name' => 'PLANCHAS PISO TOLVA KOMATSU 930E-4 FASE 9 CAPACIDAD 164 m3 FORMATO ARMADA','scaned' => 0),
                          array('id' => 'KD9164012014111','name' => 'PLANCHAS PISO TOLVA KOMATSU 930E-4 FASE 9 CAPACIDAD 164 m3 FORMATO ARMADA','scaned' => 0),
                          array('id' => 'KD9164012014111','name' => 'PLANCHAS PISO TOLVA KOMATSU 930E-4 FASE 9 CAPACIDAD 164 m3 FORMATO ARMADA','scaned' => 0),
                          array('id' => 'KD9164012014111','name' => 'PLANCHAS PISO TOLVA KOMATSU 930E-4 FASE 9 CAPACIDAD 164 m3 FORMATO ARMADA','scaned' => 0),
                          array('id' => 'KD9164012014111','name' => 'PLANCHAS PISO TOLVA KOMATSU 930E-4 FASE 9 CAPACIDAD 164 m3 FORMATO ARMADA','scaned' => 0),
                          array('id' => 'KD9164012014111','name' => 'PLANCHAS PISO TOLVA KOMATSU 930E-4 FASE 9 CAPACIDAD 164 m3 FORMATO ARMADA','scaned' => 0),
                          array('id' => 'KD9164012014111','name' => 'ARMADURA PISO TOLVA KOMATSU 930E-4 FASE 9 ANCHO 8400 mm FORMATO ARMADA','scaned' => 1)),
                      "results" => array(
                          array('id' => 'KD9164012014111','name' => 'CONJUNTO PISO TOLVA KOMATSU 930E-4 FASE 9 CAPACIDAD 164 m3 FORMATO ARMADA','scaned' => 0)),
                      "invalids" => array(
                          array('id' => 'KD9164042014111','name' => 'SECCION CANOPY A (TRAS.) TOLVA KOMATSU 930E-4 FASE 9 ANCHO 8400 mm FORMATO ARMADA','scaned' => 0)));

        return $data;

	}
}
