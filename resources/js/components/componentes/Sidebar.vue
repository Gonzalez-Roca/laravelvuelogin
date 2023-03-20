<template>
  <div class="sidebar">
    <!-- <button class="toggle-button" onclick="toggleSidebar()">
      <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-list" viewBox="0 0 16 16"> 
        <path fill-rule="evenodd" d="M2.5 12a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5z"/> 
      </svg>
    </button> -->
    <ul class="nav">
      <li>
        <a href="/home">
          <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-house" viewBox="0 0 16 16" id="IconChangeColor"> 
            <path fill-rule="evenodd" d="M2 13.5V7h1v6.5a.5.5 0 0 0 .5.5h9a.5.5 0 0 0 .5-.5V7h1v6.5a1.5 1.5 0 0 1-1.5 1.5h-9A1.5 1.5 0 0 1 2 13.5zm11-11V6l-2-2V2.5a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5z" id="mainIconPathAttribute"></path> <path fill-rule="evenodd" d="M7.293 1.5a1 1 0 0 1 1.414 0l6.647 6.646a.5.5 0 0 1-.708.708L8 2.207 1.354 8.854a.5.5 0 1 1-.708-.708L7.293 1.5z" id="mainIconPathAttribute"></path>
          </svg>
          Inicio
        </a>
      </li>
      <li>
        <a href="/home">
          <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-house" viewBox="0 0 16 16" id="IconChangeColor"> 
            <path fill-rule="evenodd" d="M2 13.5V7h1v6.5a.5.5 0 0 0 .5.5h9a.5.5 0 0 0 .5-.5V7h1v6.5a1.5 1.5 0 0 1-1.5 1.5h-9A1.5 1.5 0 0 1 2 13.5zm11-11V6l-2-2V2.5a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5z" id="mainIconPathAttribute"></path> <path fill-rule="evenodd" d="M7.293 1.5a1 1 0 0 1 1.414 0l6.647 6.646a.5.5 0 0 1-.708.708L8 2.207 1.354 8.854a.5.5 0 1 1-.708-.708L7.293 1.5z" id="mainIconPathAttribute"></path>
          </svg>
          Datos
        </a>
      </li>
      <li><a href="#">
        Opción 3
      </a></li>
    </ul>
  </div>
</template>

<script>
export default {
  name: "Sidebar",
};
</script>

<style>
  .sidebar {
    background-color: #fff;
    height: 100%;
    position: fixed;
    top: 1;
    left: 0;
    z-index: 1;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
    right: -250px;
    transition: right 0.3s ease-in-out;
    width: 75px; /* Ancho del sidebar */
    float: left;
  }

  .sidebar.active {
    right: 0; 
  }

  .toggle-button {
  position: absolute;
  top: 10px;
  right: -50px;
  width: 50px;
  height: 50px;
  background-color: #fff;
  border: none;
  border-left: 1px solid #ccc;
  cursor: pointer;
  transition: right 0.3s ease-in-out;
}

.toggle-button.active {
  right: 250px;
}

  .logo {
    padding: 20px;
  }

  .logo img {
    max-width: 100%;
  }

  .nav {
    list-style: none;
    margin: 0;
    padding: 10px;

    display: flex;
    flex-direction: column;
    
  }

  .nav li {
    margin-bottom: 0px;
    
  }

  .nav a {
    display: block;
    color: #000;
    text-decoration: none;
    font-weight: bold;
    padding: 10px;
    border-radius: 5px;
    transition: background-color 0.2s ease;
    
  }

  .nav a:hover {
    background-color: #eee;
    text-align: center;
  }

  .h-5 {
    height: 1.25rem;
  }

</style>

<script>

</script>
