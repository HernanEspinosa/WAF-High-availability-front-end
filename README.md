# Development of a WAF for a high availability front end
##### Author: Hernan Espinosa Reboredo

Final Degree Project - Computer Engineering - UAB - Barcelona

###### Project Overview


The aim of this project is to build a high availability web application firewall(WAF) that will monitor and analyse client’s requests data,keeping in mind the protection of backend server’s security.
A WAF helps to protect web applications by filtering and monitoring HTTP traffic between a web application and the Internet. By deploying a WAF in front of a web application, a filter is placed between the web application and the Internet, increasing security, performance and reliability by having client’s requests pass through the WAF before reaching the servers. A WAF operates through a set of rules often called policies. These policies aim to protect against vulnerabilities in the application by monitoring and filtering out malicious traffic. 

The main reasonthat has motivated this work is to improve the security of servers, to have a better control over the events of their activity, and to reduce the time of action afteran incident. Therefore, this project is appliable to any web application architecture in order to improve its security.

This project follows a software development model based in incremental prototyping. Each prototype will fulfil a set of requirements. The final prototype will accomplish the objectives from this work. Each prototype built will verifythe definition of requirements, since requirements can change from the initial requirements definition.

This work is divided into three main phases: Web Appli-cation Firewall version 1 (WAF_v1), Web Application Fire-wall version 2 (WAF_v2) and Web Application Firewall version 3 (WAF_v3).For every phase these steps are going to be considered for the development: The architecture analysis, to justify the proposed structure, explaining the decisions made and reasons why the structure is suitable; The architecture design, to design the proposed structure, explaining the decisions made and reasons why the structure is suitable; The architecture implementation, to implement the design proposed,and Functional testing, to validate that every project phase satisfies its initial requirements. For the final phase of the project, different types of tests are going to beperformed to ensure that it can per-form correctly under high load.

To keep track ofthe development of this project, we are going to usethe Gantt chart, which is a useful way of scheduling a project and defining the different dependen-cies between tasks.

###### WAF_v1

The first prototype of the project consists in buildinga client-server architecture composed of three nodes. The client node, which generates the requests, the intermediary node, which will be used to secure the server node, and the server node, which will handle the client requests and will generate responses. The architecture will serve an index.html file stored in the backend server. The objective of this phase is to develop andsimulate a web server architecture including the intermediary node, which will work as a load balancer in future prototypes. This phase will work as a base for future upgrades in the next phases. Different resources and processes will be carried out to suit the different objectives from the work. With this phase we want to improve backend server’s security and reduce security vulnerabilities from the web application service.
To keep up with the main objectives from this work, we are going to develop data persistence in the nodes which serve the client requests. For this phase of the project, we are going to manage architecture networking and we are going to centralise the logs from the service’s activity.


###### WAF_v2

In this phase of the project, WAF_v1 has been upgraded  by  developing high availability load balancing and data redundancy to the architecture, by adding two load balancers in the front-end of the architecture. The main objec-tive of this phase of the project is to set up a simple IP fail-over between two servers, which will be the load balancers. We want to develop and understand how high availa-bility load balancing works, how different configurations can have an impact to the architecture’s performance andusability, and to improvebackend server’s security.
In order to carry out the objective, there has been an improvement regarding the architectural configuration from the WAF_v1’s set-up, by the addition of more nodes either on the frontend side of the architecture or on the backend, and the improvement in the software configuration that will suit the architecture’s needs.
Functional tests have been performed, as well as the comparison between WAF_v1 and WAF_v2 from the project, in order to analyse the importance of a high availability load balancing set up. Different resources and processes have been carried out to suit the different objectives from the work.

###### Further Information

More information can be found in the Implementation of a Web Application Firewall for a High Availability front end paper located at the reports folder.
Documentation to run the service can be found in the User manual HAWAF document at the reports folder
