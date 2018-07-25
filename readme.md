reSlim-skeleton
=======
[![Coverage](https://img.shields.io/badge/coverage-100%25-brightgreen.svg)](https://github.com/aalfiann/reSlim-skeleton)
[![reSlim](https://img.shields.io/badge/stable-1.14.0-brightgreen.svg)](https://github.com/aalfiann/reSlim-skeleton)
[![License](https://img.shields.io/badge/license-MIT-blue.svg)](https://github.com/aalfiann/reSlim-skeleton/blob/master/license.md)

This is a skeleton of api framework reSlim.  
reSlim-skeleton is based on [Slim Framework version 3](http://www.slimframework.com/).  


Features:
---------------

1. Scalable architecture with modular concept
2. Auto log and trace error message
3. Http-Cache
4. Etc.


System Requirements
---------------

1. PHP 5.5 or newer (last tested on PHP7.3)
2. Web server with URL rewriting
3. Apache Server (Better to use Apache + Reverse Proxy NGINX)

---
Getting Started
---------------

### I. Installation
1. Get or download the project
2. Extract then rename folder **reSlim-skeleton-master** to **reslim-skeleton**
3. Open shell or CMD then go to **src** folder
    ```
    cd reslim-skeleton/src
    ```
    
4. Install it using Composer  
    ```
    composer install
    ```
5. Done

### II. Test
1. Open your browser and visit >> http://localhost:1337/reslim-skeleton/src/api/

Note: 
    - My apache server is run on port 1337.

---
Don't have much time?
---
You can try to use [reSlim](https://github.com/aalfiann/reslim).  
**reSlim** will saved your time to create http rest api extremely fast.