![image](https://user-images.githubusercontent.com/91074603/156426043-7440e4c2-66a6-4230-af2b-ff166bf8d118.png)


# Introduction

- This is a project developed for ***Astican***. A conversational bot integrated on **Teams**, this will help employees from the company to track information of the shipyard with a simple question.
- This project was made with **Lumen** for the backend and **Bot Framework SDK** for the Frontend.

# Use Cases

![image](https://user-images.githubusercontent.com/91074521/156604149-c14dfdb1-ea90-444e-8bb6-1e6fd596a2cd.png)

# User Requisites
The users form the company will use Astibot as an extension for Microsoft Teams to gather information from their database as employees, ships and maintenaces related. This information will be deployed using response cards that link the user with the database.


R.1. - The platform for Astibot will be Microsoft Teams

    R.1.1. - Employees will need a Microsoft Account delivered by the company
    R.1.2. - Users have to add Astibot as a Microsoft Teams tool
     
R.2. - Users will chat with Astibot

    R.2.1. - Astibot will response to certain commands
    R.2.2. - Every command will deploy a response card
    R.2.3. - Cards will link the user to the backend server
    R.2.4. - There will be a commando for: Employees, Ships, Maintenances and a Help Center
    R.2.5. - In case the User fails a command, Astibot will response with an error message

# Requeriments

To initiate the Backend we need: 
- an **IDE** like **Visual Studio Code**: https://code.visualstudio.com/
- **Xampp**: https://www.apachefriends.org/es/index.html
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

# Start and connect to Astibot using Microsoft Teams

Once we started our backend API, it is time to build Astibot.

First, we need TeamsToolKit installed in Visual Studio Code. Clicking in the left-sided icon will ask us to open our Astibot folder.

![image](https://user-images.githubusercontent.com/91074603/156426495-76d7f310-30c9-4ec0-a105-43e2e6eaa38a.png)
![image](https://user-images.githubusercontent.com/91074603/156426512-b35c44fe-c20d-49f1-9f4e-e018414a1b19.png)

Now we can easily debug our Astibot pressing the F5 key. It will start compiling and building Astibot.

![image](https://user-images.githubusercontent.com/91074603/156426768-b307afed-02c5-4fe7-a0a5-5956cbdd82c4.png)

We will be redirected to Log-In using a Microsoft account into Microsoft Teams, so Astibot will be attached. We will see a view to add Astibot to our tools in Micirosft Teams.

![image](https://user-images.githubusercontent.com/91074603/156427158-76162306-c59f-4ae2-8c55-02180f84eaf9.png)

Now we can chat with Astibot. It will listen to some sort commands. Those commands shows descriptive cards that will redirect the user to the backend entries and the HelpNDoc Server(It needs to be activated. There´s a HelpNDoc file in Astibot_Docs folder).

![image](https://user-images.githubusercontent.com/91074603/156427938-f62ce2e4-e2a7-46dc-81ec-4f7bf33eccf1.png)

We can use these comands:

    - "welcome": Basic command from TeamsToolKit
    - "employees": Shows a card that can redirect the user to backend/employees
    - "ships": Shows a card that can redirect the user to backend/ships
    - "maintenaces": Shows a card that can redirect the user to backend/maintenances
    - "help": Shows a card that can redirect the user to the Help Server

![image](https://user-images.githubusercontent.com/91074603/156428429-0dcbed31-313c-4a12-9773-cb870f4e0794.png)
![image](https://user-images.githubusercontent.com/91074603/156428656-1c9101ff-1b71-4e2c-b277-19fa96ecaee1.png)
![image](https://user-images.githubusercontent.com/91074603/156428465-d0102efe-8233-487a-b1b0-86d66cac44ef.png)
![image](https://user-images.githubusercontent.com/91074603/156428475-99db2a1a-49cc-4d83-ad92-9dfb7687b6a9.png)
![image](https://user-images.githubusercontent.com/91074603/156428486-855f1811-f110-4d68-a565-c23e94133eb2.png)

# Usability

As we can see the interface created by TeamsToolKit is clearly and intuitive, making it easier for the user to chat with Astibot.

Also the response cards are a usefull tool with a simple view, being obvius the use of every card. In case the user´s command doesn´t match, Astibolt will response with an error message.

![image](https://user-images.githubusercontent.com/91074603/156602918-afb63595-dadc-4ddf-a52f-3d6f5f705eb6.png)


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


