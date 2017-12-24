<?php include("header.html") ?>

<select>
	<option>Active Today</option>
	<option>Banned</option>
	<option>Inactive  Today</option>
</select>

<input placeholder="Search"/>
<button> Find </button>
<table border="0" cellspacing="0" cellpadding="0">
 	<tr>
		 <th>Vendor Name</th>
		 <th>Status</th>
		 <th>Actions</th>
 	</tr>
 	<tr>
		 <td><a href="detail.php">Rahim Foods</a></td>
		 <td>Inactive</td>
		 <td><button>Ban</button><button>Approve</button>
		 </td>
 	</tr>
 	<tr>
		<td><a href="detail.php">Aziz Foods</a></td>
		<td>Active</td>
		 <td><button>Ban</button>
		 </td>
    </tr>
 	<tr>
		 <td><a href="detail.php">Xoom Foods</a></td>
		 <td>Active</td>
		 <td><button>Ban</button><button>Approve</button>
		 </td>
 	</tr>
 	<tr>
		 <td><a href="detail.php">Yahoo</a></td>
		 <td>Active</td>
		 <td><button>Ban</button>
 	</tr>
 	<tr>
		 <td><a href="detail.php">Youtube</a></td>
		 <td>Active</td>
		 <td><button>Ban</button>
 	</tr>

 	
 </table>
</td>

<?php include("footer.html") ?>
