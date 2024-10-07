<!DOCTYPE html>
<html lang="en">

<head>
  
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <linkhref="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet">
        <link rel="stylesheet" href="login.css">
        <link rel="stylesheet" href="loggin.css">
    <title>Login</title>
</head>

<body>
    <form method="post" action="connect.php">>
    <div class="h-screen flex md:flex-row flex-col">
        <div class="lg:w-3/5 h-screen custom-py-1p lg:block hidden">
            <div class="bus-background bg-cover w-full h-full rounded-r-3xl">
            </form>
            </div>
        </div>

        <div class="flex flex-col py-4 md:1/2 lg:w-2/5 w-full items-center">
            <p class="font-bold lg:text-4xl text-2xl w-full text-center text-[#00446b]">Bus Transportation Management System</p>
            <p class="font-semibold lg:text-3xl text-xl text-center mt-10 text-[#00446b]">"LOGISTIC"</p>

            <form class="xl:w-4/6 lg:w-5/6 sm:w-2/3 py-4 rounded-3xl shadow-lg shad mt-10 flex flex-col items-center border">
                <p class="text-center mb-4 text-xl text-[#00446b]">Sign In</p>
                <hr class="border w-full border-[#00446b]">

                <div class="mt-8 w-4/5">
                    <input class="mt-1 block w-full bg-transparent rounded-md border p-2" type="email" placeholder="Email">
                </div>
                <div class="mt-4 w-4/5">
                    <input class="mt-1 block w-full bg-transparent rounded-md border p-2" type="password" placeholder="Password">
                </div>

                    <div class="w-4/5 flex justify-between mt-4 lg:mb-12 mb-12">
                        <label class="flex items-center">
                            <input 
                            type="checkbox"
                            name="remember"
                            />
                            <span class="text-sm hover:text-gray-300/50 rounded-md text-[#00446b]">Remember me</span>
                        </label>
                        <a href="Forgot.php">Forgot your password?</a>
                      
                    </div>

                    <div class="flex items-center mt-4 mb-8 w-4/5">
                  
                 <button class="w-full font-medium p-2 rounded-md border bg-[#00446b]" type="submit">
                     <p class="text-center text-white">Log In</p>      
                    </a>
                </div>
                           
            </form>
        </div>
    </div>
</body>

</html>
