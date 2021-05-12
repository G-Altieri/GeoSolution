export const state = () => ({
    //Store Menu
    status_menu: false, //su false il menu e chiuso

})

export const mutations = {
    setStatus_menu(state, x) {
        state.status_menu = x;
    }
}

export const actions = {
    setLang({ commit }, x) {
        commit('changeLang', x)
    },

}

export const getters = {

    getStatusMenu(state) {
        return state.status_menu
    }

}