<?php
// src/Controller/LuckyController.php
namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Routing\Annotation\Route;
class jung extends Controller
{
  /**
   *@Route("/", name="todo_list")
   */
    public function listAction(){
       return $this->render('todo/detail.html.twig');
    }



    // public function number()
    // {
    //     $number = random_int(0, 100);
    //
    //     return new Response(
    //         '<html><body>Lucky number: '.$number.'</body></html>'
    //     );
    // }
 /**
  *@Route("/todo/edit/{id}", name="todo_edit")
  */
    public function editAction($id, Request $request)
    {


        return $this->render(
            'todo/edit.html.twig' ,[ 'id' => $id]
        );
    }
    /**
     *@Route("/todo/create", name="todo_create")
     */
    public function createAction(Request $request)
    {

        return $this->render(
            'todo/create.html.twig'
        );
    }

}
