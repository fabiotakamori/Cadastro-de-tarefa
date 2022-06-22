<template>
    <div>
        <h1>Welcome to laravel Project</h1>
        <h2>{{devName}}</h2>
    </div>
</template>

<script>
    export default {
        setup: () =>( {
           devName: "Jorge",
        })
    }
</script>
