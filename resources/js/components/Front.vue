<template>
    <form method="POST" action="/">
        @csrf
        <div class="form-group">
            <label for="make">Make</label>
            <input type="text" name="make" id="make" class="form-control" placeholder="enter title">
        </div>
        <div class="form-group">
            <label for="model">Model</label>
            <input type="text" name="model" id="model" class="form-control" placeholder="enter title">
        </div>
        <div class="form-group">
            <label for="registration">Registration</label>
            <input type="text" name="registration" id="registration" class="form-control" placeholder="enter title">
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</template>

<script>
export default {
    mounted() {
        console.log('Component mounted.')
    }
}
</script>