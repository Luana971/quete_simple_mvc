<?php

namespace Controller;
use Model\CategoryManager;
use Twig_Loader_Filesystem;
use Twig_Environment;

class CategoryController extends AbstractController
{
    //CategoryController
    public function show(int $id)
    {
        $categoryManager = new CategoryManager($this->getPdo());
        $category = $categoryManager->selectOneById($id);
        return $this->twig->render('Category/Category.html.twig', ['category' => $category]);
    }
    public function index()
    {
        $categoryManager = new CategoryManager($this->getPdo());
        $categories = $categoryManager->selectAll();
        return $this->twig->render('Category/Category.html.twig', ['categories' => $categories]);
    }
    public function edit(int $id): string
    {
        $categoryManager = new CategoryManager($this->getPdo());
        $category = $categoryManager->selectOneById($id);
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $category->setTitle($_POST['title']);
            $categoryManager->update($category);
        }
        return $this->twig->render('Category/edit.html.twig.twig', ['category' => $category]);
    }
    public function add()
    {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $categoryManager = new CategoryManager($this->getPdo());
            $category = new Category();
            $category->setTitle($_POST['title']);
            $id = $categoryManager->insert($category);
            header('Location:/Category/' . $id);
        }
        return $this->twig->render('Category/add.html.twig');
    }
    public function delete(int $id)
    {
        $categoryManager = new CategoryManager($this->getPdo());
        $categoryManager->delete($id);
        header('Location:/');
    }

}
   
?>