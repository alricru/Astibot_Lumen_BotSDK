![image](https://user-images.githubusercontent.com/91074603/156426043-7440e4c2-66a6-4230-af2b-ff166bf8d118.png)

# Index

- **Introduction**

- **Requeriments**

- **Connection with Database**

- **Models**



# Introduction

- This is a project developed for ***Astican***. A conversational bot integrated on **Teams**, this will help employees from the company to track information of the shipyard with a simple question.
- This project was made with **Lumen** for the backend and **Bot Framework SDK** for the Frontend.

# Requeriments

To initiate the Backend we need: 
- an **IDE** like **Visual Studio Code**: https://code.visualstudio.com/
- **Xamp**: https://www.apachefriends.org/es/index.html
- **Composer**: https://getcomposer.org/download/


To use Astibot we´ll need: 
- **Visual Studio Code**: https://code.visualstudio.com/
- **TeamsToolKit**: A plug-in you can install in Visual Studio Code
- ![image](https://user-images.githubusercontent.com/91074603/156425801-2b1e9307-3a72-412d-af4c-1c005053e28e.png)
 
# Connection with database

You need to open Xamp and import the database with the **db_astibot.sql** file on PHPMyAdmin or create an empty database named **db_astibot.sql** and migrate the tables with the command **php artisan migrate**

![image](https://user-images.githubusercontent.com/91074521/156416250-4042b4a8-c081-4386-8326-d8c3522a84be.png)

![image](https://user-images.githubusercontent.com/91074521/156416444-b7f3a933-c078-4c64-b5be-c891f707f06a.png)


In visual studio we need to install the **Composer** package using the command ***npm install composer***, once you do that use the command ***Composer lumen*** to start the backend.

![image](https://user-images.githubusercontent.com/91074521/156417177-6b259e38-240f-4750-b456-2522fec5e0a3.png)

# Models
- Data Model:

![image](https://user-images.githubusercontent.com/91074521/156423274-0b51aa1f-eb65-4be3-b1a5-6d18893b0a1b.png)

- Relationship Model:

![image](https://user-images.githubusercontent.com/91074521/156423488-2f535275-6445-4879-882d-9c00f4540d43.png)

# Postman Publish
 - https://documenter.getpostman.com/view/17625230/UVeMJPon

# References
 - Api Restfull with Lumen: https://www.youtube.com/watch?v=VmtOP5sEH68
 - Api Restfull with Lumen 2: https://www.youtube.com/watch?v=IJSrPKlJixA


