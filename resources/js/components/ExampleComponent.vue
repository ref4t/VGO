<template>
    <div>
        <md-table md-sort="name" md-sort-order="asc" md-card md-fixed-header v-for="item in items" :key="item">
            <!-- <md-table-toolbar>
                <div class="md-toolbar-section-start">
                    <h1 class="md-title">Users</h1>
                </div>

                <md-field md-clearable class="md-toolbar-section-end">
                    <md-input placeholder="Search by name..." v-model="search" @input="searchOnTable" />
                </md-field>
            </md-table-toolbar> -->

            <!-- <md-table-empty-state
                md-label="No users found"
                :md-description="`No user found for this '${search}' query. Try a different search term or create a new user.`">
                <md-button class="md-primary md-raised" @click="newUser">Create New User</md-button>
            </md-table-empty-state> -->

            <md-table-row slot="md-table-row" slot-scope="{ item }">
                <md-table-cell md-label="Bike Name" md-sort-by="name">{{ item.name }}</md-table-cell>
                <md-table-cell md-label="Brand" md-sort-by="brand">{{ item.brand }}</md-table-cell>
                <md-table-cell md-label="Price" md-sort-by="price">{{ item.price }}</md-table-cell>
                <md-table-cell md-label="Engine Type" md-sort-by="etype">{{ item.etype }}</md-table-cell>
                <md-table-cell md-label="Engine Displacement(cc)" md-sort-by="edisplacement">{{ item.edisplacement }}</md-table-cell>
                <md-table-cell md-label="Engine Max Power" md-sort-by="emaxpower">{{ item.emaxpower }}</md-table-cell>
                <md-table-cell md-label="Engine Max Torque" md-sort-by="emaxtorque">{{ item.emaxtorque }}</md-table-cell>
                <md-table-cell md-label="Carburettor" md-sort-by="carburettor">{{ item.carburettor }}</md-table-cell>
                <md-table-cell md-label="Compression" md-sort-by="compression">{{ item.compression }}</md-table-cell>
                <md-table-cell md-label="Bore x Stroke" md-sort-by="borestroke">{{ item.borestroke }}</md-table-cell>
                <md-table-cell md-label="Engine Oil Capacity" md-sort-by="eoilcap">{{ item.eoilcap }}</md-table-cell>
                <md-table-cell md-label="Kill Switch" md-sort-by="killswitch">{{ item.killswitch }}</md-table-cell>
                <md-table-cell md-label="Chassis Type" md-sort-by="chassistype">{{ item.chassistype }}</md-table-cell>
                <md-table-cell md-label="No. of Gears" md-sort-by="noofgears">{{ item.noofgears }}</md-table-cell>
                <md-table-cell md-label="Suspension Front" md-sort-by="sfront">{{ item.sfront }}</md-table-cell>
                <md-table-cell md-label="Suspension Rear" md-sort-by="srear">{{ item.srear }}</md-table-cell>
                <md-table-cell md-label="Brake Front" md-sort-by="bfront">{{ item.bfront }}</md-table-cell>
                <md-table-cell md-label="Brake Rear" md-sort-by="brear">{{ item.brear }}</md-table-cell>
                <md-table-cell md-label="Tire Front" md-sort-by="tfront">{{ item.tfront }}</md-table-cell>
                <md-table-cell md-label="Tire Rear" md-sort-by="trear">{{ item.trear }}</md-table-cell>
                <md-table-cell md-label="Fuel Capacity" md-sort-by="fuelcap">{{ item.fuelcap }}</md-table-cell>
                <md-table-cell md-label="ELectrical System" md-sort-by="esystem">{{ item.esystem }}</md-table-cell>
                <md-table-cell md-label="Head Lamp" md-sort-by="headlamp">{{ item.headlamp }}</md-table-cell>
                <md-table-cell md-label="Passlight" md-sort-by="passlight">{{ item.passlight }}</md-table-cell>
                <md-table-cell md-label="Dimention Length" md-sort-by="dlength">{{ item.dlength }}</md-table-cell>
                <md-table-cell md-label="Dimention Ground Clearence" md-sort-by="dgroundclear">{{ item.dgroundclear }}</md-table-cell>
                <md-table-cell md-label="Dimention Height" md-sort-by="dheight">{{ item.dheight }}</md-table-cell>
                <md-table-cell md-label="Dimention Width" md-sort-by="dwidth">{{ item.dwidth }}</md-table-cell>
                <md-table-cell md-label="Dimention Wheelbase" md-sort-by="dwheelbase">{{ item.dwheelbase }}</md-table-cell>
                <md-table-cell md-label="Dimention Kerb Weight" md-sort-by="dkerbweight">{{ item.dkerbweight }}</md-table-cell>
                <md-table-cell md-label="Top Speed" md-sort-by="topspeed">{{ item.topspeed }}</md-table-cell>
                <md-table-cell md-label="Milage By Company" md-sort-by="milagecompany">{{ item.milagecompany }}</md-table-cell>
                <md-table-cell md-label="Milage By Users" md-sort-by="milageusers">{{ item.milageusers }}</md-table-cell>
                <md-table-cell md-label="Cooling System" md-sort-by="coolingsystem">{{ item.coolingsystem }}</md-table-cell>
                <md-table-cell md-label="Starting Method" md-sort-by="startingmethod">{{ item.startingmethod }}</md-table-cell>
                <md-table-cell md-label="ABS" md-sort-by="abs" >{{ item.abs }}</md-table-cell>
                <md-table-cell md-label="Edit"></md-table-cell>
            </md-table-row>
        </md-table>
    </div>
</template>

<script>
    // const toLower = text => {
    //     return text.toString().toLowerCase()
    // }

    // const searchByName = (items, term) => {
    //     if (term) {
    //         return items.filter(item => toLower(item.name).includes(toLower(term)))
    //     }

    //     return items
    // }

    export default {
        // data:() => ({
        //     search: null,
        //     searched: [],
        //     users: [
        //         {
        //             id: 1,
        //             name: "Shawna Dubbin",
        //             email: "sdubbin0@geocities.com",
        //             gender: "Male",
        //             title: "Assistant Media Planner"
        //         },
        //         {
        //             id: 2,
        //             name: "Odette Demageard",
        //             email: "odemageard1@spotify.com",
        //             gender: "Female",
        //             title: "Account Coordinator"
        //         }
        //     ]
        // }),
        data(){
            return {
                items:[]
            }
        },
        // methods: {
        //     searchOnTable () {
        //         this.searched = searchByName(this.users, this.search)
        //     }
        // },
        created () {
            // this.searched = this.users
            // this.$http.get("http://localhost:8000/api/getItems")
            // .then(function (response){
            //     this.items = response.body.bikeinfo;
            // })
            axios.get('viewbikes/getItems')
            .then(response => this.items = response.data);
        }
    }
</script>

<style lang="scss" scoped>
    .md-field {
        max-width: 300px;
    }
</style>
