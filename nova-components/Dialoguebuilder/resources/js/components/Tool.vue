<template>
    <div>
        <heading class="mb-6">Dialogue Builder</heading>

        <card class="flex flex-col items-center justify-center" style="min-height: 300px">
                <button id="addRowButton" 

                onclick="
                    let t=document.createElement('input');
                    t.setAttribute('value','this');
                    t.setAttribute('class','form-control');
                    getElementById('dialogueForm').appendChild(t);
                   " 

                    class="btn btn-default btn-primary">
                    Add row</button>

                <form id="dialogueForm">
                    <input type="submit" class="btn btn-default btn-primary" value="Submit">
                </form>
        </card>
    </div>
</template>

<script>
export default {
    mounted() {
        //


    },
}

</script>


<style>
/* Scoped Styles */
</style>