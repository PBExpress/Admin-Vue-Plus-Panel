<template>
  <div class="container-fluid">
    <form @submit.prevent="submitForm">
      <div class="row">
        <div class="col-md-12">
          <div class="card">
            <div class="card-header card-header-primary card-header-icon">
              <div class="card-icon">
                <i class="material-icons">edit</i>
              </div>
              <h4 class="card-title">
                {{ $t('global.edit') }}
                <strong>{{ $t('cruds.document.title_singular') }}</strong>
              </h4>
            </div>
            <div class="card-body">
              <back-button></back-button>
            </div>
            <div class="card-body">
              <bootstrap-alert />
              <div class="row">
                <div class="col-md-12">
                  <div
                    class="form-group bmd-form-group"
                    :class="{
                      'has-items': entry.created_by,
                      'is-focused': activeField == 'created_by'
                    }"
                  >
                    <label class="bmd-label-floating">{{
                      $t('cruds.document.fields.created_by')
                    }}</label>
                    <input
                      class="form-control"
                      type="text"
                      :value="entry.created_by"
                      @input="updateCreatedBy"
                      @focus="focusField('created_by')"
                      @blur="clearFocus"
                    />
                  </div>
                  <div
                    class="form-group bmd-form-group"
                    :class="{
                      'has-items': entry.reason_for_upload,
                      'is-focused': activeField == 'reason_for_upload'
                    }"
                  >
                    <label class="bmd-label-floating">{{
                      $t('cruds.document.fields.reason_for_upload')
                    }}</label>
                    <input
                      class="form-control"
                      type="text"
                      :value="entry.reason_for_upload"
                      @input="updateReasonForUpload"
                      @focus="focusField('reason_for_upload')"
                      @blur="clearFocus"
                    />
                  </div>
                  <div class="form-group">
                    <label>{{ $t('cruds.document.fields.files') }}</label>
                    <attachment
                      :route="getRoute('documents')"
                      :collection-name="'document_files'"
                      :media="entry.files"
                      :model-id="$route.params.id"
                      :max-file-size="2"
                      @file-uploaded="insertFilesFile"
                      @file-removed="removeFilesFile"
                      :max-files="1"
                    />
                  </div>
                </div>
              </div>
            </div>
            <div class="card-footer">
              <vue-button-spinner
                class="btn-primary"
                :status="status"
                :isLoading="loading"
                :disabled="loading"
              >
                {{ $t('global.save') }}
              </vue-button-spinner>
            </div>
          </div>
        </div>
      </div>
    </form>
  </div>
</template>

<script>
import { mapGetters, mapActions } from 'vuex'
import Attachment from '@components/Attachments/Attachment'

export default {
  components: {
    Attachment
  },
  data() {
    return {
      status: '',
      activeField: ''
    }
  },
  computed: {
    ...mapGetters('DocumentsSingle', ['entry', 'loading'])
  },
  beforeDestroy() {
    this.resetState()
  },
  watch: {
    '$route.params.id': {
      immediate: true,
      handler() {
        this.resetState()
        this.fetchEditData(this.$route.params.id)
      }
    }
  },
  methods: {
    ...mapActions('DocumentsSingle', [
      'fetchEditData',
      'updateData',
      'resetState',
      'setCreatedBy',
      'setReasonForUpload',
      'insertFilesFile',
      'removeFilesFile'
    ]),
    updateCreatedBy(e) {
      this.setCreatedBy(e.target.value)
    },
    updateReasonForUpload(e) {
      this.setReasonForUpload(e.target.value)
    },
    getRoute(name) {
      return `${axios.defaults.baseURL}${name}/media`
    },
    submitForm() {
      this.updateData()
        .then(() => {
          this.$router.push({ name: 'documents.index' })
          this.$eventHub.$emit('update-success')
        })
        .catch(error => {
          this.status = 'failed'
          _.delay(() => {
            this.status = ''
          }, 3000)
        })
    },
    focusField(name) {
      this.activeField = name
    },
    clearFocus() {
      this.activeField = ''
    }
  }
}
</script>
