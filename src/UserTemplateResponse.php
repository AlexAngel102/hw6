<?php


namespace App;


class UserTemplateResponse
{
    public function __invoke(User $user): void
    {
        $this->getUserView($user);
    }

    private function getUserView(User $user): void
    {
        $template = '
                    <!doctype html>
                    <html lang="en">
                      <head>
                        <!-- Required meta tags -->
                        <meta charset="utf-8">
                        <meta name="viewport" content="width=device-width, initial-scale=1">
                    
                        <!-- Bootstrap CSS -->
                        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
                    
                        <title>User Info</title>
                      </head>
                       <body>
                       <div class="container">
                         <h1>User Info</h1>
                         <table class="table table-success table-striped">
                             <thead>
                                 <tr>
                                     <th scope="col">Name</th>
                                     <th scope="col">E-Mail</th>
                                     <th scope="col">Password</th>
                                     <th scope="col">Adress</th>
                                 </tr>
                             </thead>
                             <tbody>
                                 <tr>
                                   <td>%s</td>
                                   <td>%s</td>
                                   <td>%s</td>
                                   <td>%s</td>
                                 </tr>
                             </tbody>
                         </table>
                      </div>    
                      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
                      <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js" integrity="sha384-q2kxQ16AaE6UbzuKqyBE9/u/KzioAlnx2maXQHiDX9d4/zp8Ok3f+M7DPm+Ib6IU" crossorigin="anonymous"></script>
                      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-pQQkAEnwaBkjpqZ8RU1fF1AKtTcHJwFl3pblpTlHXybJjHpMYo79HY3hIi4NKxyj" crossorigin="anonymous"></script>
                     </body>
                    </html>
                    ';
        echo sprintf($template, $user->getName(), $user->getEmail(), $user->getPassword(), $user->getAdress());
    }
}