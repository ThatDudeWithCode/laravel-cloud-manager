<template>
    <div class="form-button">
        <button :id="id" class="button" :type="type">
            <slot></slot>
        </button>
    </div>
</template>

<script>
export default {
    name: 'VButton',
    props: ['id', 'type']
}
</script>
