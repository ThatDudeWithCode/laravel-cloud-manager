<template>
    <div class="form-container">
        <form :id="id" :action="route" :method="method">
            <slot></slot>
        </form>
    </div>
</template>

<script>
export default {
    name: 'VForm',
    props: ['id', 'route', 'method']
}
</script>
