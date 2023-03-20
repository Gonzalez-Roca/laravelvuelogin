<template>
  <div>
    <sidebar></sidebar>
    <contenido></contenido>
  </div>
</template>

<script>

import Sidebar from './componentes/Sidebar.vue'
import Contenido from './componentes/Contenido.vue'

export default {
  components: {
    Sidebar,
    Contenido
  },
  // otros datos del componente o la vista
}
</script>

<style>

</style>
