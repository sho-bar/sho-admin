import axios from 'axios'

/**
 * This class makes api request and gets data
 */
export default class {
    /**
     * @param {object} data
     * @return {void}
     */
    constructor(data) {
        this.data = data
        return axios.post(sho_admin_globals.ajax_url, this.createParams())
    }

    /**
     * Creates parameters for the axios AJAX request
     * 
     * @return {URLSearchParams}
     */
    createParams() {
        const params = new URLSearchParams()

        params.append('action', this.data.method)
        params.append('_ajax_nonce', sho_admin_globals.nonce)

        if (this.data.params) {
            params.append('params', JSON.stringify(this.data.params))
        }

        return params
    }
}
