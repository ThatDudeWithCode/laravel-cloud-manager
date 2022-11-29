<template>
    <div class="input-group">
        <label :for="id" class="label">{{ label }}</label>
        <input :id="id" :type="type" :name="name" :value="value" :placeholder="label" class="input" :class="error">
        <slot></slot>
    </div>
</template>

<script>
export default {
    name: 'VInput',
    props: ['id', 'type', 'name', 'value', 'label', 'error']
}
</script>
