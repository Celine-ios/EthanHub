<?php
namespace Productos\Controller;

use Zend\Mvc\Controller\AbstractActionController;
use Zend\View\Model\ViewModel;
use ZendService\Api\Api;

class ProductosController extends AbstractActionController
{
    public function indexAction()
    {

        
    }

    public function addAction()
    {
    }

    public function editAction()
    {
    }

    public function deleteAction()
    {
    }
    public function processaddAction() {

            $api = new Api();

  $result = $api->setApi('auth', function ($params) {

    return array(

        'url' => 'https://app.alegra.com/api/v1/items',
        'header' => array(

            'Content-Type' => 'application/json',
            'Authorization' => 'Basic dGhlanlqY29AZ21haWwuY29tOmZiMjI1YTFiZmU4ODlmNDM4Yjc1'
        ),
        'method' => 'POST',
        'body' => json_encode(array(

            'name'=> $_POST['nombre'],
            'price'=> $_POST['precio']
            
        )),
        'response' => array(
            'valid_codes' => array('200')
        )
    );
});

        $result = $api->auth('thejyjco@gmail.com', 'qbvmbdbtjmmp');

        if ($api->isSuccess()) {

            
               echo $producto->name;

               return;
}
 else {

    //printf("Error (%d): %s\n", $api->getStatusCode(), $api->getErrorMsg());

            $result = $api->getErrorMsg();

              $datos = json_decode($result);

                return new ViewModel(['precio' => $_POST['precio'], 'nombre' => $_POST['nombre'] ]);

}   

    }

    public function processeditAction() {


             $api = new Api();

            $result = $api->setApi('auth', function ($params) {

    return array(

        'url' => 'https://app.alegra.com/api/v1/items/'.$_POST['id'],
        'header' => array(

            'Content-Type' => 'application/json',
            'Authorization' => 'Basic dGhlanlqY29AZ21haWwuY29tOmZiMjI1YTFiZmU4ODlmNDM4Yjc1'
        ),
        'method' => 'PUT',
        'body' => json_encode(array(

            'name'=> $_POST['nombre'],
            'price'=> $_POST['precio']
            
        )),
        'response' => array(
            'valid_codes' => array('200')
        )
    );
 });

             $result = $api->auth('thejyjco@gmail.com', 'qbvmbdbtjmmp');

        if ($api->isSuccess()) {


            $datos = json_decode($result);

               
        return new ViewModel(['precio' => $_POST['precio'], 'nombre' => $_POST['nombre'],'id' => $_POST['id']]);
}
 else {

    //printf("Error (%d): %s\n", $api->getStatusCode(), $api->getErrorMsg());

            $result = $api->getErrorMsg();

              $datos = json_decode($result);

                 echo $result;

                 return;

        

}                   


    }

    public function processdelAction() {


         $api = new Api();

            $result = $api->setApi('auth', function ($params) {

    return array(

        'url' => 'https://app.alegra.com/api/v1/items/'.$_POST['id'],
        'header' => array(

            'Content-Type' => 'application/json',
            'Authorization' => 'Basic dGhlanlqY29AZ21haWwuY29tOmZiMjI1YTFiZmU4ODlmNDM4Yjc1'
        ),
        'method' => 'DELETE',
        'body' => json_encode(array(

            'id'=> $_POST['id']
            
        )),
        'response' => array(
            'valid_codes' => array('200')
        )
    );
 });

             $result = $api->auth('thejyjco@gmail.com', 'qbvmbdbtjmmp');

        if ($api->isSuccess()) {


            $datos = json_decode($result);


        return new ViewModel(['id' => $_POST['id']]);
}
 else {

    //printf("Error (%d): %s\n", $api->getStatusCode(), $api->getErrorMsg());

            $result = $api->getErrorMsg();

              $datos = json_decode($result);

                 echo $result;

                 return;

        

} 


    }
}

?>