@extends('layouts.admin.template')
@section('content')
<?php $page_title = 'Document Management' ?>
<?php $page_description = 'View Document' ?>
<?php $level1 = 'Home' ?>
<?php $divide1 = ' -> ' ?>
<?php $level2 = 'Document Management' ?>
<?php $divide2 = ' -> ' ?>
<?php $level3 = 'View File' ?>


    <!-- The Viewer will be instantiated here -->
    <div id="MyViewerDiv"></div>

    <!-- The Viewer JS -->
    <script src="https://developer.api.autodesk.com/viewingservice/v1/viewers/three.min.js"></script>
    <script src="https://developer.api.autodesk.com/viewingservice/v1/viewers/viewer3D.min.js"></script>

    <!-- Developer JS -->
    <script>
        var viewer;
        var options = {
            env: 'AutodeskProduction',
            accessToken: 'eyJhbGciOiJIUzI1NiIsImtpZCI6Imp3dF9zeW1tZXRyaWNfa2V5In0.eyJjbGllbnRfaWQiOiJ4NjFBQ0hWR2Z0WktXQWlTSEVDcmlPd2dkWGRpSG5RRyIsImV4cCI6MTQ5MzAyNjQ3Nywic2NvcGUiOlsiZGF0YTpyZWFkIiwiZGF0YTp3cml0ZSIsImJ1Y2tldDpjcmVhdGUiLCJidWNrZXQ6cmVhZCJdLCJhdWQiOiJodHRwczovL2F1dG9kZXNrLmNvbS9hdWQvand0ZXhwNjAiLCJqdGkiOiJGTWlXa2NVQTllY3I4RE5DSFlLaFNrdnRKNkhkZk04MHFmMUM0R0tOdUY2UWxRcllxTGlqdFByM1FrakNxZzkxIn0.N83oG5anldAzOa3BUdIzf9kFb67-60TBnbbIkTER-dQ'
        };
        var documentId = 'urn:dXJuOmFkc2sub2JqZWN0czpvcy5vYmplY3Q6Zm91bmRsYXlidWNrZXQvcHMyLmR3Zw';
        Autodesk.Viewing.Initializer(options, function onInitialized(){
            Autodesk.Viewing.Document.load(documentId, onDocumentLoadSuccess, onDocumentLoadFailure);
        });

        /**
        * Autodesk.Viewing.Document.load() success callback.
        * Proceeds with model initialization.
        */
        function onDocumentLoadSuccess(doc) {

            // A document contains references to 3D and 2D viewables.
            var viewables = Autodesk.Viewing.Document.getSubItemsWithProperties(doc.getRootItem(), {'type':'geometry'}, true);
            if (viewables.length === 0) {
                console.error('Document contains no viewables.');
                return;
            }

            // Choose any of the avialble viewables
            var initialViewable = viewables[0];
            var svfUrl = doc.getViewablePath(initialViewable);
            var modelOptions = {
                sharedPropertyDbPath: doc.getPropertyDbPath()
            };

            var viewerDiv = document.getElementById('MyViewerDiv');
            viewer = new Autodesk.Viewing.Private.GuiViewer3D(viewerDiv);
            viewer.start(svfUrl, modelOptions, onLoadModelSuccess, onLoadModelError);
        }

        /**
         * Autodesk.Viewing.Document.load() failuire callback.
         */
        function onDocumentLoadFailure(viewerErrorCode) {
            console.error('onDocumentLoadFailure() - errorCode:' + viewerErrorCode);
        }

        /**
         * viewer.loadModel() success callback.
         * Invoked after the model's SVF has been initially loaded.
         * It may trigger before any geometry has been downloaded and displayed on-screen.
         */
        function onLoadModelSuccess(model) {
            console.log('onLoadModelSuccess()!');
            console.log('Validate model loaded: ' + (viewer.model === model));
            console.log(model);
        }

        /**
         * viewer.loadModel() failure callback.
         * Invoked when there's an error fetching the SVF file.
         */
        function onLoadModelError(viewerErrorCode) {
            console.error('onLoadModelError() - errorCode:' + viewerErrorCode);
        }

    </script>

@endsection
