<?php


namespace App;


use App\Interfaces\UserResponse;

class UserTemplateResponse extends UserResponse
{
    public $user;
    public function __construct(User $user)
    {
        $this->user = $user;
    }

    public function getUserView(): string
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
                     </body>
                    </html>
                    ';
        return sprintf($template, $this->user->getName(), $this->user->getEmail(), $this->user->getPassword(), $this->user->getAdress());
    }
}