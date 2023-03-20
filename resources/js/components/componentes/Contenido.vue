<template>
    <div>
        <header class="titulo">
            <h2>holis</h2>
                    <a href="/home">
                        <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" fill="currentColor" class="bi bi-person-plus" viewBox="0 0 16 16" id="IconChangeColor"> <path d="M6 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm2-3a2 2 0 1 1-4 0 2 2 0 0 1 4 0zm4 8c0 1-1 1-1 1H1s-1 0-1-1 1-4 6-4 6 3 6 4zm-1-.004c-.001-.246-.154-.986-.832-1.664C9.516 10.68 8.289 10 6 10c-2.29 0-3.516.68-4.168 1.332-.678.678-.83 1.418-.832 1.664h10z" id="mainIconPathAttribute" fill="#000000"></path> <path fill-rule="evenodd" d="M13.5 5a.5.5 0 0 1 .5.5V7h1.5a.5.5 0 0 1 0 1H14v1.5a.5.5 0 0 1-1 0V8h-1.5a.5.5 0 0 1 0-1H13V5.5a.5.5 0 0 1 .5-.5z" id="mainIconPathAttribute" fill="#000000"></path> </svg>                    
                    </a>
        </header>
        <body>
            <div class="contenido">
            <!-- contenido de tu aplicación -->
                <table>
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Nombre</th>
                            <th>Email</th>
                            <th>Acciones</th>
                        </tr>
                        <tr>
                            
                        </tr>
                    </thead>
                    <tbody>
                        <tr v-for="user in users" :key="user.id">
                            <td>{{ user.id }}</td>
                            <td>{{ user.name }}</td>
                            <td>{{ user.email }}</td>
                            <td>
                                <ul class="nav">
                                    <li>
                                        <a href="/home">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-house" viewBox="0 0 16 16" id="IconChangeColor"> 
                                                <path fill-rule="evenodd" d="M2 13.5V7h1v6.5a.5.5 0 0 0 .5.5h9a.5.5 0 0 0 .5-.5V7h1v6.5a1.5 1.5 0 0 1-1.5 1.5h-9A1.5 1.5 0 0 1 2 13.5zm11-11V6l-2-2V2.5a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5z" id="mainIconPathAttribute"></path> <path fill-rule="evenodd" d="M7.293 1.5a1 1 0 0 1 1.414 0l6.647 6.646a.5.5 0 0 1-.708.708L8 2.207 1.354 8.854a.5.5 0 1 1-.708-.708L7.293 1.5z" id="mainIconPathAttribute"></path>
                                            </svg>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="/home">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-house" viewBox="0 0 16 16" id="IconChangeColor"> 
                                            <path fill-rule="evenodd" d="M2 13.5V7h1v6.5a.5.5 0 0 0 .5.5h9a.5.5 0 0 0 .5-.5V7h1v6.5a1.5 1.5 0 0 1-1.5 1.5h-9A1.5 1.5 0 0 1 2 13.5zm11-11V6l-2-2V2.5a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5z" id="mainIconPathAttribute"></path> <path fill-rule="evenodd" d="M7.293 1.5a1 1 0 0 1 1.414 0l6.647 6.646a.5.5 0 0 1-.708.708L8 2.207 1.354 8.854a.5.5 0 1 1-.708-.708L7.293 1.5z" id="mainIconPathAttribute"></path>
                                        </svg>
                                        </a>
                                    </li>
                                </ul>
                            </td>
                        </tr>
                    </tbody>
                </table>
            <!-- fin del contenido -->
            </div>
        </body>

        
    </div>
</template>

<script>

export default {
  // otros datos del componente o la vista
  name: "Contenido",
  data() {
    return {
      users: []
    };
  },
  mounted() {
    axios.get('https://jsonplaceholder.typicode.com/users')
      .then(response => {
        this.users = response.data;
      })
      .catch(error => {
        console.log(error);
      });
  }
}
</script>

<style >

  .contenido {
    margin-left: 100px; /* Ancho del sidebar + 20px de margen */
    max-width: calc(100% - 220px); /* Ancho máximo igual al ancho disponible menos el ancho del sidebar y el margen */
    transition: all 0.3s ease;
  }

  table {
    border-collapse: collapse;
  }

  .titulo {
    margin-left: 100px; /* Ancho del sidebar + 20px de margen */
  }

  td,
  th {
    border: 1px solid black;
    padding: 0.5rem;
  }

</style>