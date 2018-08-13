﻿using PkiSuiteAspNetMvcSample.Classes;
using System;
using System.Collections.Generic;
using System.IO;
using System.Linq;
using System.Web;
using System.Web.Mvc;

namespace PkiSuiteAspNetMvcSample.Controllers {

	/**
	 * This controller's purpose is to download the sample file that is signed during the signature examples
	 * or download a upload file for signature or download a previously performed signature.
	 */
	public class DownloadController : BaseController {

		// GET Download/File/{id}
		[HttpGet]
		public ActionResult File(string id) {
			byte[] content;

			if (id == null) {
				return HttpNotFound();
			}

			string extension;
			try {
				content = StorageMock.Read(id, out extension);
			}
			catch (FileNotFoundException) {
				return HttpNotFound();
			}

			var filename = id + extension;
			return File(content, MimeMapping.GetMimeMapping(filename), filename);
		}

		// GET Download/Sample
		[HttpGet]
		public ActionResult Sample() {
			var fileContent = StorageMock.Read(StorageMock.GetSampleDocPath());
			return File(fileContent, "application/pdf", "Sample.pdf");
		}

		// GET Download/Doc/{id}
		[HttpGet]
		public ActionResult Doc(int id) {
			var fileContent = StorageMock.Read(StorageMock.GetBatchDocPath(id));
			return File(fileContent, "application/pdf", string.Format("Doc{0:D2}.pdf", id));
		}

		// GET Download/Sample
		[HttpGet]
		public ActionResult SampleNFe() {
			var fileContent = StorageMock.Read(StorageMock.GetSampleNFePath());
			return File(fileContent, "text/xml", "SampleNFe.xml");
		}

		// GET Download/SampleInvoice
		[HttpGet]
		public ActionResult SampleInvoice() {
			var fileContent = StorageMock.Read(StorageMock.GetXmlInvoiceWithSigsPath());
			return File(fileContent, "text/xml", "InvoiceWithSigs.xml");
		}

		// GET Download/Manifesto
		[HttpGet]
		public ActionResult Manifesto() {
			var fileContent = StorageMock.Read(StorageMock.GetSampleManifestPath());
			return File(fileContent, "text/xml", "EventoManifesto.xml");
		}
	}
}