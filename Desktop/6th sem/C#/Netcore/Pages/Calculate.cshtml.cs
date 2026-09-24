using Microsoft.AspNetCore.Mvc;
using Microsoft.AspNetCore.Mvc.RazorPages;

namespace Netcore.Pages
{
    public class CalculateModel : PageModel
    {
        public string Title = "";
        public void OnGet()
        {
            Title = "Calculate Numbers";
        }
    }
}
