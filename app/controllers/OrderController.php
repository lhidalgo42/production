<?php

class OrderController extends \BaseController {

	public function show()
	{
		$data = array("order" => array('id' => 'KD9164012014111','lote' => '12345','name' => 'CONJUNTO PISO TOLVA KOMATSU 930E-4 FASE 9 CAPACIDAD 164 m3 FORMATO ARMADA'),
                      "products" => array(
                          array('id' => 'KD9164012014111','name' => 'PLANCHAS PISO TOLVA KOMATSU 930E-4 FASE 9 CAPACIDAD 164 m3 FORMATO ARMADA','scaned' => 0,'count' => 2,'last' => 0),
                          array('id' => 'KD9164012014111','name' => 'PLANCHAS PISO TOLVA KOMATSU 930E-4 FASE 9 CAPACIDAD 164 m3 FORMATO ARMADA','scaned' => 0,'count' => 2,'last' => 0),
                          array('id' => 'KD9164012014111','name' => 'PLANCHAS PISO TOLVA KOMATSU 930E-4 FASE 9 CAPACIDAD 164 m3 FORMATO ARMADA','scaned' => 1,'count' => 2,'last' => 0),
                          array('id' => 'KD9164012014111','name' => 'PLANCHAS PISO TOLVA KOMATSU 930E-4 FASE 9 CAPACIDAD 164 m3 FORMATO ARMADA','scaned' => 0,'count' => 2,'last' => 0),
                          array('id' => 'KD9164012014111','name' => 'PLANCHAS PISO TOLVA KOMATSU 930E-4 FASE 9 CAPACIDAD 164 m3 FORMATO ARMADA','scaned' => 1,'count' => 2,'last' => 1),
                          array('id' => 'KD9164012014111','name' => 'PLANCHAS PISO TOLVA KOMATSU 930E-4 FASE 9 CAPACIDAD 164 m3 FORMATO ARMADA','scaned' => 2,'count' => 2,'last' => 0),
                          array('id' => 'KD9164012014111','name' => 'PLANCHAS PISO TOLVA KOMATSU 930E-4 FASE 9 CAPACIDAD 164 m3 FORMATO ARMADA','scaned' => 0,'count' => 2,'last' => 0),
                          array('id' => 'KD9164012014111','name' => 'PLANCHAS PISO TOLVA KOMATSU 930E-4 FASE 9 CAPACIDAD 164 m3 FORMATO ARMADA','scaned' => 0,'count' => 2,'last' => 0),
                          array('id' => 'KD9164012014111','name' => 'PLANCHAS PISO TOLVA KOMATSU 930E-4 FASE 9 CAPACIDAD 164 m3 FORMATO ARMADA','scaned' => 0,'count' => 2,'last' => 0),
                          array('id' => 'KD9164012014111','name' => 'PLANCHAS PISO TOLVA KOMATSU 930E-4 FASE 9 CAPACIDAD 164 m3 FORMATO ARMADA','scaned' => 0,'count' => 2,'last' => 0),
                          array('id' => 'KD9164012014111','name' => 'ARMADURA PISO TOLVA KOMATSU 930E-4 FASE 9 ANCHO 8400 mm FORMATO ARMADA','scaned' => 1 ,'count' => 2,'last' => 0)),
                      "results" => array(
                          array('id' => 'KD9164012014111','name' => 'CONJUNTO PISO TOLVA KOMATSU 930E-4 FASE 9 CAPACIDAD 164 m3 FORMATO ARMADA','scaned' => 0,'count' => 2,'last' => 0)),
                      "invalids" => array(
                          array('id' => 'KD9164042014111','name' => 'SECCION CANOPY A (TRAS.) TOLVA KOMATSU 930E-4 FASE 9 ANCHO 8400 mm FORMATO ARMADA','scaned' => 0)));

        $dataCheck = array("order" => $data['order']);
        $c=0;
        foreach($data['products'] as $product) {
            if ($c % 2 == 1)
                $class = "lightgray";
            else$class = "";
            if ($product['last'] == 1) {
                if ($product['scaned'] - $product['count'] == 0)
                    $dataCheck['products'][] = array('id' => $product['id'], 'name' => $product['name'], 'scaned' => $product['scaned'], "class" => "list-group-item-success active", "icon" => "fa fa-check", 'count' => $product['count']);
                else
                    $dataCheck['products'][] = array('id' => $product['id'], 'name' => $product['name'], 'scaned' => $product['scaned'], "class" => "active", "icon" => "fa fa-refresh fa-spin", 'count' => $product['count']);
            } else {
                if ($product['scaned'] - $product['count'] == 0)
                    $dataCheck['products'][] = array('id' => $product['id'], 'name' => $product['name'], 'scaned' => $product['scaned'], "class" => "list-group-item-success ", "icon" => "fa fa-check", 'count' => $product['count']);
                else
                    $dataCheck['products'][] = array('id' => $product['id'], 'name' => $product['name'], 'scaned' => $product['scaned'], "class" => " " . $class, "icon" => "fa fa-refresh fa-spin", 'count' => $product['count']);
            }
            $c++;
        }

        $c=0;
        foreach($data['results'] as $results) {
            if($c%2==1)
                $class = "lightgray";
            else$class = "";

            if ($product['last'] == 1) {
                if ($results['scaned'] - $results['count'] == 0)
                    $dataCheck['results'][] = array('id' => $results['id'], 'name' => $results['name'], 'scaned' => $results['scaned'], "class" => "list-group-item-success active", "icon" => "fa fa-check", 'count' => $results['count']);
                else
                    $dataCheck['results'][] = array('id' => $results['id'], 'name' => $results['name'], 'scaned' => $results['scaned'], "class" => "active", "icon" => "fa fa-refresh fa-spin", 'count' => $results['count']);}
            else
            {
                if ($results['scaned'] - $results['count'] == 0)
                    $dataCheck['results'][] = array('id' => $results['id'], 'name' => $results['name'], 'scaned' => $results['scaned'], "class" => "list-group-item-success", "icon" => "fa fa-check", 'count' => $results['count']);
                else
                    $dataCheck['results'][] = array('id' => $results['id'], 'name' => $results['name'], 'scaned' => $results['scaned'], "class" => " ".$class, "icon" => "fa fa-refresh fa-spin", 'count' => $results['count']);
            }
            $c++;
        }
        $dataCheck['invalids'] = $data['invalids'];
        return $dataCheck;

	}
}
